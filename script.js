// Tambah kategori
document.getElementById("addCategoryBtn").addEventListener("click", function () {
    var newCategory = document.getElementById("newCategory").value.trim();
    if (newCategory) {
        fetch("category.php?action=add", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "name=" + encodeURIComponent(newCategory)
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Kategori berhasil ditambahkan!");
                    location.reload(); // Refresh daftar kategori
                } else {
                    alert("Gagal menambahkan kategori: " + data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    } else {
        alert("Nama kategori tidak boleh kosong!");
    }
});

// Edit kategori
function editCategory(categoryId) {
    var newName = prompt("Masukkan nama kategori baru:");
    if (newName && newName.trim() !== "") {
        fetch("category.php?action=edit&id=" + categoryId, {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "name=" + encodeURIComponent(newName.trim())
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Kategori berhasil diubah!");
                    location.reload();
                } else {
                    alert("Gagal mengubah kategori: " + data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    }
}

// Hapus kategori
function deleteCategory(categoryId) {
    if (confirm("Yakin ingin menghapus kategori ini?")) {
        fetch("category.php?action=delete&id=" + categoryId, {
            method: "POST"
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Kategori berhasil dihapus!");
                    location.reload();
                } else {
                    alert("Gagal menghapus kategori: " + data.message);
                }
            })
            .catch(error => console.error("Error:", error));
    }
}

// Preview gambar sebelum upload
document.getElementById("fileInput").addEventListener("change", function (event) {
    const files = event.target.files;
    const previewArea = document.getElementById("previewArea");
    const previewImage = document.getElementById("previewImage");

    // Bersihkan isi preview area
    previewArea.innerHTML = "";

    if (files.length > 0) {
        // Jika hanya pilih 1 gambar → tampilkan di previewImage
        if (files.length === 1 && files[0].type.startsWith("image/")) {
            previewImage.src = URL.createObjectURL(files[0]);
            previewImage.style.display = "block";
            previewArea.style.display = "none"; // sembunyikan area multi preview
        } 
        // Jika pilih lebih dari 1 gambar → tampilkan semua di previewArea
        else {
            previewImage.style.display = "none";
            previewArea.style.display = "flex";
            previewArea.style.flexWrap = "wrap";
            previewArea.innerHTML = "";

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (file.type.startsWith("image/")) {
                    const img = document.createElement("img");
                    img.src = URL.createObjectURL(file);
                    img.style.maxWidth = "150px";
                    img.style.margin = "5px";
                    img.style.borderRadius = "8px";
                    img.onload = function () {
                        URL.revokeObjectURL(img.src);
                    };
                    previewArea.appendChild(img);
                }
            }
        }
    } else {
        previewImage.style.display = "none";
        previewArea.style.display = "block";
        previewArea.textContent = "Belum ada gambar yang dipilih";
    }
});


// Upload gambar
document.getElementById("uploadBtn").addEventListener("click", function () {
    const fileInput   = document.getElementById("fileInput");      // <-- sama dengan HTML
    const categoryId  = document.getElementById("categorySelect").value;
    const altText     = document.getElementById("imageTitle").value;

    if (!fileInput.files.length) {
        alert("Pilih gambar terlebih dahulu!");
        return;
    }

    const formData = new FormData();
    formData.append("image", fileInput.files[0]);       // <-- PHP harus baca $_FILES['image']
    formData.append("category_id", categoryId);
    formData.append("alt_text", altText);               // <-- kalau tabel butuh alt_text
    formData.append("date", new Date().toISOString().slice(0,10)); // kalau ingin kirim tanggal dari client

    fetch("upload.php", { method: "POST", body: formData })
      .then(r => r.json())
      .then(data => {
        if (data.success) {
          alert("Gambar berhasil diunggah!");
          location.reload();
        } else {
          alert("Gagal mengunggah gambar: " + data.message);
        }
      })
      .catch(err => console.error("Error:", err));
});


