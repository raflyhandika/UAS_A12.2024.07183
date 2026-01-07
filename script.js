// ===== NOTIFIKASI SEDERHANA =====
function showToast(message, type = "success") {
    const toast = document.createElement("div");
    toast.className = `toast ${type}`;
    toast.innerText = message;

    document.body.appendChild(toast);

    setTimeout(() => toast.classList.add("show"), 100);
    setTimeout(() => {
        toast.classList.remove("show");
        setTimeout(() => toast.remove(), 300);
    }, 3000);
}

// ===== KONFIRMASI HAPUS =====
function confirmDelete(url) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        window.location.href = url;
    }
}

// ===== PENCARIAN DATA (LIVE SEARCH) =====
function searchTable() {
    const input = document.getElementById("searchInput").value.toLowerCase();
    const rows = document.querySelectorAll("table tbody tr");

    rows.forEach(row => {
        const text = row.innerText.toLowerCase();
        row.style.display = text.includes(input) ? "" : "none";
    });
}

// ===== SORTING TABEL =====
function sortTable(colIndex) {
    const table = document.querySelector("table");
    const rows = Array.from(table.rows).slice(1);
    const asc = table.dataset.sort !== "asc";

    rows.sort((a, b) => {
        let x = a.cells[colIndex].innerText;
        let y = b.cells[colIndex].innerText;

        return asc ? x.localeCompare(y, 'id', {numeric: true}) 
                   : y.localeCompare(x, 'id', {numeric: true});
    });

    rows.forEach(row => table.appendChild(row));
    table.dataset.sort = asc ? "asc" : "desc";
}

// ===== VALIDASI FORM =====
function validateForm() {
    const harga = document.getElementById("harga").value;
    const stok = document.getElementById("stok").value;

    if (harga <= 0 || stok < 0) {
        alert("Harga harus > 0 dan stok tidak boleh negatif");
        return false;
    }
    return true;
}

{}