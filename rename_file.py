import hashlib
import os
import sys
import time

#get all files in the current directory
files = os.listdir()

def main():
    #print select menu  and get user input
    print("")
    print("Select an option:")
    print("1. Rename all files")
    print("2. Remove duplicate files")
    print("3. Exit")
    print("")
    choice = input("Enter your choice: ")
    print("")
    #if user input is 1, rename all files
    if choice == "1":
        rename_all_files()
    #if user input is 2, delete a specific file if duplicate
    elif choice == "2":
        delete_specific_file_if_duplicate()
    #if user input is 3, exit program
    elif choice == "3":
        sys.exit()
    #if user input is not 1, 2, or 3, print error message and restart program
    else:
        print("")
        print("Error: Invalid input")
        print("")
        main()

def rename_all_files():
    for file in files:
        #calculate hash for each file
        hash_md5 = hashlib.md5(open(file, 'rb').read()).hexdigest()
        #calculate sha512 for each file
        hash_sha512 = hashlib.sha512(open(file, 'rb').read()).hexdigest()
        #calculate sha256 for each file
        hash_sha256 = hashlib.sha256(open(file, 'rb').read()).hexdigest()
        #calculate sha1 for each file
        hash_sha1 = hashlib.sha1(open(file, 'rb').read()).hexdigest()
        #calculate sha224 for each file
        hash_sha224 = hashlib.sha224(open(file, 'rb').read()).hexdigest()


        #get the file extension
        file_extension = os.path.splitext(file)[1]
        #rename the file
        rename = hash_md5 + file_extension
        try:
            os.rename(file, rename)
        except:
            print("Error: " + file + " already exists")
            with open("error.txt", "a") as myfile:
                myfile.write(file + "," + rename + "\n")
        print(file + " has been renamed to " + rename)

def delete_specific_file_if_duplicate():
    file1 = open('error.txt', 'r')
    Lines = file1.readlines()
    for line in Lines:
        original_file = line.split(",")[1]
        duplicate_file = line.split(",")[0]
        original_file = original_file.rstrip("\n")
        duplicate_file = duplicate_file.rstrip("\n")

        original_hash_sha512 = hashlib.sha512(open(original_file, 'rb').read()).hexdigest()
        original_hash_sha256 = hashlib.sha256(open(original_file, 'rb').read()).hexdigest()
        original_hash_sha1 = hashlib.sha1(open(original_file, 'rb').read()).hexdigest()
        original_hash_sha224 = hashlib.sha224(open(original_file, 'rb').read()).hexdigest()
        try:
            duplicate_hash_sha512 = hashlib.sha512(open(duplicate_file, 'rb').read()).hexdigest()
            duplicate_hash_sha256 = hashlib.sha256(open(duplicate_file, 'rb').read()).hexdigest()
            duplicate_hash_sha1 = hashlib.sha1(open(duplicate_file, 'rb').read()).hexdigest()
            duplicate_hash_sha224 = hashlib.sha224(open(duplicate_file, 'rb').read()).hexdigest()
        except:
            print("Error: " + duplicate_file + " does not exist")
            continue

        if original_hash_sha512 == duplicate_hash_sha512 and original_hash_sha256 == duplicate_hash_sha256 and original_hash_sha1 == duplicate_hash_sha1 and original_hash_sha224 == duplicate_hash_sha224:
            #remove \n from end of duplicate file
            os.remove(duplicate_file)
            print(duplicate_file + " has been deleted")


if __name__ == "__main__":
    main()