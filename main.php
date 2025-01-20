<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balasan Ucapan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f1f7fc; /* Warna pastel biru muda untuk latar belakang */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff; /* Warna putih untuk kontainer */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
            background-color: #fce4ec; /* Warna pastel pink pada kontainer */
        }

        h2 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #9575cd; /* Warna pastel ungu lembut untuk judul */
        }

        input[type="text"] {
            width: 80%;
            padding: 12px;
            margin: 15px 0;
            border: 2px solid #e1bee7; /* Warna pastel ungu muda untuk border */
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            background-color: #f3e5f5; /* Warna pastel ungu muda pada input */
        }

        input[type="text"]:focus {
            border-color: #9575cd; /* Warna pastel ungu lebih gelap saat fokus */
        }

        button {
            background-color: #b3e5fc; /* Warna pastel biru terang pada tombol */
            color: #0277bd; /* Warna teks biru lebih gelap */
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #81d4fa; /* Warna biru lebih gelap saat hover */
        }

        button:active {
            background-color: #4fa3d1; /* Warna biru lebih gelap saat tombol ditekan */
        }
    </style>
    <script type="text/javascript">
        function tampilkanBalasan() {
            var ucapan = document.getElementById("ucapan").value;
            var balasan = "";

            // Logika untuk balasan
            if (ucapan.toLowerCase() == "aku sayang dirimu") {
                balasan = "Aku juga sayang kamu!";
            } else {
                balasan = "Terima kasih sudah berbicara denganku.";
            }

            // Menampilkan pop-up dengan balasan
            alert(balasan);
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Masukkan Ucapan</h2>
        <form onsubmit="event.preventDefault(); tampilkanBalasan();">
            <input type="text" id="ucapan" name="ucapan" placeholder="Ketikkan ucapanmu..." required>
            <br>
            <button type="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
