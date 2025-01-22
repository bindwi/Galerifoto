// Validasi Form Edit
document.getElementById('editForm')?.addEventListener('submit', function (event) {
    let title = document.getElementById('title').value.trim();
    let description = document.getElementById('description').value.trim();

    if (!title) {
        alert('Judul tidak boleh kosong!');
        event.preventDefault();
    } else if (description.length > 255) {
        alert('Deskripsi tidak boleh lebih dari 255 karakter!');
        event.preventDefault();
    }
});

// Konfirmasi Sebelum Hapus Foto
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function () {
        const photoId = this.getAttribute('data-id');
        const confirmation = confirm('Yakin ingin menghapus foto ini?');

        if (confirmation) {
            document.getElementById(`deleteForm-${photoId}`).submit();
        }
    });
});

// Pratinjau Gambar Sebelum Diupload
document.getElementById('image')?.addEventListener('change', function () {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('previewImage').setAttribute('src', e.target.result);
        };
        reader.readAsDataURL(file);
    }
});
