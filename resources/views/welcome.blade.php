<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit SVG Text</title>
    <style>
        .editable-text {

        }
        /* Untuk menghilangkan border, padding, dan margin pada input */
        .editable-input {
            border: none;
            outline: none;
            background: transparent;
            position: absolute;
            font-family: inherit; /* Gunakan font yang sama dengan teks */
            font-size: 14px;
            width: 100px;
        }
        /* Tombol print */
        .print-btn {
            margin: 10px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    {{-- COVER --}}
    <svg xmlns="http://www.w3.org/2000/svg" width="296mm" height="208mm" style="margin: 0; padding: 0; border: 1px solid gray;" id="svg-cover" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path fill="none" stroke="black" d="M 50,60 H 1065 V 290 H 50 V 60"  />
        <image x="225" y="80" width="120" height="120" xlink:href="https://sistem-sop.vercel.app/img/Logo%20BPS.png" alt="Logo BPS"></image>
        <text x="135" y="230" text-anchor="left" dominant-baseline="left" font-size="24px" font-weight= "bold" font-style= "italic" fill="black">BADAN PUSAT STATISTIK</text>
        <text x="150" y="260" text-anchor="left" dominant-baseline="left" font-size="24px" font-weight= "bold" fill="black">INSPEKTORAT UTAMA</text>
        <path fill="none" stroke="black" d="M 525,60 V 290" />
        <path fill="none" stroke="black" d="M 690,60 V 290" />

        <text x="540" y="75" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Nomor SOP</text>
        <text x="700" y="75" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text1">EditMe</text>
        <path fill="none" stroke="black" d="M 525,79 H 1065" />
        <text x="540" y="92" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Tanggal Pembuatan</text>
        <text x="700" y="92" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text2">EditMe</text>
        <path fill="none" stroke="black" d="M 525,96 H 1065" />
        <text x="540" y="109" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Tanggal Revisi</text>
        <text x="700" y="109" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text3">EditMe</text>
        <path fill="none" stroke="black" d="M 525,113 H 1065" />
        <text x="540" y="126" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Tanggal Efektif</text>
        <text x="700" y="126" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text4">EditMe</text>
        <path fill="none" stroke="black" d="M 525,130 H 1065" />
        <text x="540" y="143" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Disahkan Oleh</text>
        <text x="700" y="143" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text5">Plt. Inspektur Utama</text>
        <text x="700" y="225" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text6">Drs. Akhmad Jaelani, M.Si</text>
        <text x="700" y="240" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text7">NIP 196306211986011001</text>
        <path fill="none" stroke="black" d="M 525,245 H 1065" />
        <text x="540" y="270" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Nama SOP</text>
        <text x="700" y="260" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text8">EditMe</text>

        {{-- Blok I --}}
        <path fill="none" stroke="black" d="M 50,310 H 500 V 430 H 50 V 310" />
        <path fill="none" stroke="black" d="M 50,333 H 500" />
        <text x="60" y="325" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Dasar Hukum:</text>
        <text x="60" y="350" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">1. </text>
        <text x="75" y="350" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text9">EditMe</text>
        <text x="60" y="375" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">2. </text>
        <text x="75" y="375" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text10">EditMe</text>
        <text x="60" y="400" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">3. </text>
        <text x="75" y="400" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text11">EditMe</text>

        <path fill="none" stroke="black" d="M 525,310 H 1065 V 430 H 525 V 310" />
        <path fill="none" stroke="black" d="M 525,333 H 1065" />
        <text x="535" y="325" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Kualifikasi Pelaksanaan:</text>
        <text x="535" y="350" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">1. </text>
        <text x="550" y="350" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text12">EditMe</text>
        <text x="535" y="375" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">2. </text>
        <text x="550" y="375" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text13">EditMe</text>
        <text x="535" y="400" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">3. </text>
        <text x="550" y="400" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text14">EditMe</text>

        {{-- Blok II --}}
        <path fill="none" stroke="black" d="M 50,450 H 500 V 660 H 50 V 450" />
        <text x="60" y="465" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Keterkaitan:</text>
        <path fill="none" stroke="black" d="M 50,473 H 500" />
        <text x="60" y="490" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">1. </text>
        <text x="75" y="490" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text15">EditMe</text>
        <text x="60" y="515" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">2. </text>
        <text x="75" y="515" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text16">EditMe</text>
        <text x="60" y="540" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">3. </text>
        <text x="75" y="540" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text17">EditMe</text>
        <path fill="none" stroke="black" d="M 50,570 H 500" />
        <text x="60" y="585" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Peringatan:</text>
        <path fill="none" stroke="black" d="M 50,593 H 500" />
        <text x="60" y="610" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text18">EditMe</text>


        <path fill="none" stroke="black" d="M 525,450 H 1065 V 660 H 525 V 450" />
        <text x="535" y="465" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Peralatan/Perlengkapan:</text>
        <path fill="none" stroke="black" d="M 525,473 H 1065" />
        <text x="535" y="490" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">1. </text>
        <text x="550" y="490" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text12">EditMe</text>
        <text x="535" y="515" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">2. </text>
        <text x="550" y="515" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text13">EditMe</text>
        <text x="535" y="540" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">3. </text>
        <text x="550" y="540" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text14">EditMe</text>
        <path fill="none" stroke="black" d="M 525,570 H 1065" />
        <text x="535" y="585" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Pencatatan dan Pendataan:</text>
        <path fill="none" stroke="black" d="M 525,593 H 1065" />
        <text x="535" y="610" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black" id="editable-text18">EditMe</text>
    </svg>


    <!-- Tombol untuk mencetak SOP -->
    <button class="print-btn" style="position: absolute; top: 10px;" onclick="PrintSOP()">Print SOP</button>

    {{-- SOP --}}
    <svg xmlns="http://www.w3.org/2000/svg" width="1115" height="788" style="border: 1px solid gray;" id="svg-sop" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path fill="none" stroke="black" d="M 50,60 H 1065 V 741 H 50 V 60" />
        <text x="65" y="100" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">No</text>
        <path fill="none" stroke="black" d="M 100,60 V 741" />
        <text x="200" y="100" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Aktivitas</text>
        <path fill="none" stroke="black" d="M 350,60 V 741" />
        <text x="500" y="75" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Pelaksana</text>
        <path fill="none" stroke="black" d="M 350,80 H 685" />
        <text x="370" y="100" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Inspektur</text>
        <text x="375" y="115" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Wilayah</text>
        <path fill="none" stroke="black" d="M 450,80 V 741" />
        <text x="500" y="95" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Tim Audit</text>
        <path fill="none" stroke="black" d="M 450,100 H 616" />
        <text x="460" y="115" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Pengendali</text>
        <text x="470" y="130" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Teknis</text>
        <path fill="none" stroke="black" d="M 535,100 V 741" />
        <text x="555" y="115" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Ketua</text>
        <text x="560" y="130" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Tim</text>
        {{-- <text x="500" y="75" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Anggota Tim</text> --}}
        <path fill="none" stroke="black" d="M 615,80 V 741" />
        <text x="620" y="100" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Inspektur</text>
        <text x="625" y="115" text-anchor="left" dominant-baseline="left" font-size="14px" font-weight="bold" fill="black">Wilayah</text>

        <path fill="none" stroke="black" d="M 685,60 V 741" />

        <path fill="none" stroke="black" d="M 1015,60 V 741" />
        <path fill="none" stroke="black" d="M 50,135 H 1065" />
        <path fill="none" stroke="black" d="M 50,150 H 1065" />
        <text x="70" y="180" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">1</text>
        <text x="110" y="170" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Merima surat permintaan reviu dan </text>
        <text x="110" y="185" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">menerbitkan surat tugas</text>
        <path fill="none" stroke="black" d="M 50,205 H 1065" />
        <image x="375" y="165" width="50" xlink:href="https://upload.wikimedia.org/wikipedia/commons/a/ad/Flowchart_Terminal.svg" alt="Logo BPS"></image>
        <path fill="none" stroke="black" d="M 425,175 H 495 V 220" />
        <text x="70" y="230" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">2</text>
        <text x="110" y="225" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">Menetapkan ruang lingkup dan menyusun</text>
        <text x="110" y="240" text-anchor="left" dominant-baseline="left" font-size="14px" fill="black">konsep surat tugas </text>
        <path fill="none" stroke="black" d="M 460,220 H 525 V 250 H 460 V 220" />
    </svg>

    <script>
        const setupEditableText = (id) => {
            const textElement = document.getElementById(id);

            textElement.addEventListener('click', () => {
                const bbox = textElement.getBoundingClientRect(); // Mendapatkan dimensi elemen teks
                const fontSize = textElement.getAttribute('font-size'); // Mendapatkan ukuran font

                // Sembunyikan elemen teks
                textElement.style.visibility = 'hidden';

                // Buat elemen input untuk menggantikan teks
                const input = document.createElement('input');
                input.type = 'text';
                input.className = 'editable-input';
                input.value = textElement.textContent;

                // Atur posisi dan ukuran input sesuai dengan teks
                input.style.left = `${bbox.left}px`;
                input.style.top = `${bbox.top}px`;
                input.style.width = `200px`;

                // input.style.height = `${bbox.height}px`;
                input.style.fontSize = `${fontSize}px`;
                input.style.textAlign = 'left'; // Sesuaikan dengan properti `text-anchor`

                document.body.appendChild(input);
                input.focus();

                // Simpan perubahan saat kehilangan fokus
                input.addEventListener('blur', () => {
                    if (input.value.trim() !== '') {
                        textElement.textContent = input.value;
                    }
                    document.body.removeChild(input);
                    textElement.style.visibility = 'visible'; // Tampilkan kembali teks asli
                });

                // Simpan perubahan saat tekan Enter
                input.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter') {
                        input.blur();
                    }
                });
            });
        };

        for (let i = 1; i <= 20; i++) {
            setupEditableText(`editable-text${i}`);
        }

        function PrintSOP() {
    const cover = document.getElementById('svg-cover').outerHTML;
    const sop = document.getElementById('svg-sop').outerHTML;

    // Simpan konten asli halaman
    const originalContent = document.body.innerHTML;

    // Ganti konten halaman dengan konten yang ingin dicetak
    document.body.innerHTML = `
        <html>
            <head>
                <style>
                    @page {
                        size: A4 landscape;
                        margin: 0;
                    }

                    body {
                        margin: 0;
                        padding: 0;
                        text-align: center;
                    }

                    svg {
                        max-width: 100%;
                        max-height: 100%;
                    }
                </style>
            </head>
            <body>
                ${cover}
                ${sop}
            </body>
        </html>
    `;

    // Cetak halaman
    window.print();

    // Kembalikan konten asli
    document.body.innerHTML = originalContent;
}
    </script>
</body>
</html>
