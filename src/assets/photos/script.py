import os
import json

def generate_media_array(output_file="media_array.json"):
    # Ottieni la directory corrente
    current_directory = os.getcwd()

    # Lista di estensioni valide per immagini e video
    valid_extensions = ['.jpg', '.jpeg', '.png', '.gif', '.mp4', '.mkv', '.avi', '.mov']

    # Lista per contenere i file validi
    media_files = []

    # Scansiona la directory corrente
    for file in os.listdir(current_directory):
        if os.path.isfile(file) and os.path.splitext(file)[1].lower() in valid_extensions:
            media_files.append(file)

    # Converte la lista in un array JSON
    json_data = json.dumps(media_files, indent=4)

    # Salva l'array in un file JSON nella directory corrente
    with open(output_file, "w") as f:
        f.write(json_data)

    print(f"Media array salvato in {os.path.join(current_directory, output_file)}")

# Esegui lo script
if __name__ == "__main__":
    generate_media_array()
