# Passi da fare per poter utilizzare il template di Laravel

0. Creo la repository a partire dal template e mi clono la repository appena creata

1. Copio il file .env.example e lo rinomino in .env

2. Apro il terminale ed eseguo il comando composer install

3. Sempre nel terminale, al termine del comando composer install, eseguo il comando php artisan key:generate

4. Sempre nel terminale, al termine dell'esecuzione di php artisan key:generate, eseguiamo il comando npm install (oppure, npm i)

5. Sempre nel terminale, al termine di npm install, eseguire il comando npm run build
- Al posto di npm run build, potreste eseguire npm run dev e lasciarlo attivo

6. Aprire un altro terminale ed eseguire il comando php artisan serve













-------------------------------------------------

Se la mia tabella si chiama books, il model si chiamerà Book

Se la mia entità al plurale è NOMEENTITAs (con NOMEENTITA tutto minuscolo e in snake case), il model si chiamera NomeDellEntitaAlSingolareInPascalCase


cars -> Car

user_details -> UserDetail

teachers -> Teacher

degrees -> Degree
