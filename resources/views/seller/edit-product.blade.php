@extends('layouts.seller')

@section('content')
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-batik-maroon mb-4">Edit Produk Batik</h2>
                <p class="text-gray-600 text-lg">Perbarui detail produk batik Anda</p>
            </div>

            @if ($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mt-2 list-disc list-inside text-sm">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form edit produk -->
            <form id="editProductForm" class="space-y-6" action="{{ route('product.update', $product->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- penting untuk method update --}}

                <!-- Informasi Dasar -->
                <div class="form-section">
                    <h3 class="section-title">Informasi Dasar Produk</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-batik-maroon font-semibold mb-2">Nama Produk *</label>
                            <input type="text" id="name" name="name" class="custom-input"
                                value="{{ old('name', $product->name) }}" placeholder="Contoh: Batik Tulis Parang Jogja"
                                required>
                        </div>

                        <div>
                            <label for="category" class="block text-batik-maroon font-semibold mb-2">Kategori *</label>
                            <select id="category" name="category" class="custom-select" required>
                                <option value="">Pilih Kategori</option>
                                @foreach (['kemeja', 'dress', 'kain', 'blouse', 'sarung', 'aksesoris', 'seragam'] as $cat)
                                    <option value="{{ $cat }}"
                                        {{ old('category', $product->category) == $cat ? 'selected' : '' }}>
                                        {{ ucfirst($cat) }} Batik
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="description" class="block text-batik-maroon font-semibold mb-2">Deskripsi Produk
                            *</label>
                        <textarea id="description" name="description" rows="4" class="custom-textarea"
                            placeholder="Jelaskan detail produk batik Anda..." required>{{ old('description', $product->description) }}</textarea>
                    </div>
                </div>

                <!-- Harga & Stok -->
                <div class="form-section">
                    <h3 class="section-title">Harga & Stok</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="price" class="block text-batik-maroon font-semibold mb-2">Harga (Rp) *</label>
                            <input type="number" id="price" name="price" class="custom-input"
                                value="{{ old('price', $product->price) }}" min="0" required>
                        </div>

                        <div>
                            <label for="stock" class="block text-batik-maroon font-semibold mb-2">Stok *</label>
                            <input type="number" id="stock" name="stock" class="custom-input"
                                value="{{ old('stock', $product->stock) }}" min="0" required>
                        </div>
                    </div>
                </div>

                <!-- Foto Produk -->
                <div class="form-section">
                    <h3 class="section-title">Foto Produk</h3>
                    <div>
                        <label class="block text-batik-maroon font-semibold mb-2">Foto Utama *</label>

                        {{-- preview lama --}}
                        <div class="mb-4">
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="Foto lama"
                                    class="rounded-lg shadow max-h-64 mx-auto">
                            @endif
                        </div>

                        <div class="image-preview cursor-pointer" id="mainImagePreview">
                            <input type="file" id="image" name="image" accept="image/*" class="hidden">
                            <div class="preview-content">
                                <div class="text-6xl text-batik-gold mb-4">📷</div>
                                <p class="text-batik-maroon font-medium">Klik atau seret untuk ganti foto</p>
                                <p class="text-sm text-gray-500 mt-2">Format: JPG, PNG (Max: 5MB)</p>
                            </div>
                        </div>

                        <div class="mt-4">
                            <img id="previewImage" style="max-width: 100%; display: none;" class="rounded-lg shadow" />
                        </div>

                        <!-- Modal crop tetap sama -->
                        <div id="cropModal"
                            class="hidden fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50">
                            <div class="bg-white p-4 rounded-lg max-w-lg w-full">
                                <h3 class="text-lg font-semibold mb-2">Crop Gambar</h3>
                                <div>
                                    <img id="cropImage" style="max-width: 100%;" />
                                </div>
                                <div class="mt-4 flex justify-end gap-2">
                                    <button type="button" onclick="closeCropper()"
                                        class="px-4 py-2 bg-gray-400 text-white rounded">Batal</button>
                                    <button type="button" onclick="cropImageNow()"
                                        class="px-4 py-2 bg-batik-maroon text-white rounded">Simpan Crop</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Action Button -->
                <div class="flex justify-center pt-6">
                    <button type="submit" class="custom-button px-8 py-3">
                        💾 Update Produk
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            // Image upload handling
            function setupImageUpload(previewId, inputId) {
                const preview = document.getElementById(previewId);
                const input = document.getElementById(inputId);

                preview.addEventListener('click', () => input.click());

                preview.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    preview.classList.add('dragover');
                });

                preview.addEventListener('dragleave', () => {
                    preview.classList.remove('dragover');
                });

                preview.addEventListener('drop', (e) => {
                    e.preventDefault();
                    preview.classList.remove('dragover');

                    const files = e.dataTransfer.files;
                    if (files.length > 0) {
                        input.files = files;
                        handleImagePreview(files, previewId);
                    }
                });

                input.addEventListener('change', (e) => {
                    handleImagePreview(e.target.files, previewId);
                });
            }

            function handleImagePreview(files, previewId) {
                const preview = document.getElementById(previewId);

                if (files.length > 0) {
                    Array.from(files).forEach((file) => {
                        if (file.type.startsWith('image/')) {
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                preview.querySelector('.preview-content').innerHTML = `
                                    <img src="${e.target.result}" class="preview-image w-full h-48 object-cover rounded-lg">
                                `;
                            };
                            reader.readAsDataURL(file);
                        }
                    });
                }
            }

            // Initialize image upload
            setupImageUpload('mainImagePreview', 'image');

            // Character counter for description
            document.getElementById('description').addEventListener('input', function(e) {
                const maxLength = 1000;
                const currentLength = e.target.value.length;

                if (!document.getElementById('charCounter')) {
                    const counter = document.createElement('div');
                    counter.id = 'charCounter';
                    counter.className = 'text-sm text-gray-500 mt-1';
                    e.target.parentElement.appendChild(counter);
                }

                const counter = document.getElementById('charCounter');
                counter.textContent = `${currentLength}/${maxLength} karakter`;

                if (currentLength > maxLength) {
                    counter.style.color = '#dc2626';
                    e.target.value = e.target.value.substring(0, maxLength);
                } else {
                    counter.style.color = '#6b7280';
                }
            });
            let cropper;
            const inputImage = document.getElementById('image');
            const previewImage = document.getElementById('previewImage');
            const previewBox = document.getElementById('mainImagePreview');
            const cropModal = document.getElementById('cropModal');
            const cropImage = document.getElementById('cropImage');

            // klik box = buka file input
            previewBox.addEventListener('click', () => inputImage.click());

            inputImage.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function(event) {
                        cropImage.src = event.target.result;
                        cropModal.classList.remove('hidden');

                        if (cropper) cropper.destroy();
                        cropper = new Cropper(cropImage, {
                            aspectRatio: 1, // square
                            viewMode: 1,
                            responsive: true,
                            autoCropArea: 1
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            function closeCropper() {
                cropModal.classList.add('hidden');
                if (cropper) {
                    cropper.destroy();
                    cropper = null;
                }
            }

            function cropImageNow() {
                if (cropper) {
                    const canvas = cropper.getCroppedCanvas({
                        width: 600,
                        height: 600
                    });

                    // tampilkan hasil crop
                    previewImage.src = canvas.toDataURL("image/png");
                    previewImage.style.display = "block";

                    // ganti file input dengan hasil crop
                    canvas.toBlob((blob) => {
                        const file = new File([blob], "cropped.png", {
                            type: "image/png"
                        });
                        const dataTransfer = new DataTransfer();
                        dataTransfer.items.add(file);
                        inputImage.files = dataTransfer.files;
                    });

                    closeCropper();
                }
            }
        </script>
    @endpush
@endsection
