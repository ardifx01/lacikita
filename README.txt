Alur kerja harian (supaya sinkron kantor ↔ rumah)

1.Sebelum mulai kerja (misalnya di kantor):

git pull origin main


2. Saat selesai kerja, simpan perubahan :

git add .
git commit -m "update fitur X"
git push origin main


3. Di rumah tinggal git pull origin main lagi untuk update terbaru.