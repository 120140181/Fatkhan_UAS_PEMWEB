window.addEventListener('DOMContentLoaded', event => {
    // Collapse responsive navbar
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    const form = document.getElementById("myForm");
    const dataTable = document.getElementById("dataTable");
    let lastBarangNumber = 0;

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        handleFormSubmission();
    });

    function handleFormSubmission() {
        // Mendapatkan nilai dari input form
        const nama_brg = document.getElementById("nama_brg").value;
        const jumlah = document.getElementById("jumlah").value;
        const berat = document.getElementById("berat").checked ? "Kg" : "";
        const jenisBarang = document.querySelector('input[name="jenisBarang"]:checked').value;
        const tgl_masuk = document.getElementById("tgl_masuk").value;

        // Increment nomor terakhir kode barang
        lastBarangNumber++;

        // Membuat kode barang baru dengan format B-
        const kodeBarang = "B-" + lastBarangNumber;

        // Membuat baris baru untuk tabel
        const newRow = dataTable.querySelector("tbody").insertRow(-1);

        // Mengisi kolom pada baris baru
        const cell1 = newRow.insertCell(0);
        const cell2 = newRow.insertCell(1);
        const cell3 = newRow.insertCell(2);
        const cell4 = newRow.insertCell(3);
        const cell5 = newRow.insertCell(4);
        const cell6 = newRow.insertCell(5);           

        // Menambahkan data ke dalam kolom baris baru
        cell1.innerHTML = dataTable.rows.length;
        cell2.innerHTML = nama_brg;
        cell3.innerHTML = kodeBarang; // Menambahkan kode barang ke kolom
        cell4.innerHTML = jumlah;
        cell5.innerHTML = jenisBarang;
        cell6.innerHTML = tgl_masuk;

        // Reset form setelah input
        form.reset();
    }
    
});
