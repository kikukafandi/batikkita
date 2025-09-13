<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Batik Nusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'batik-brown': '#8B4513',
                        'batik-gold': '#DAA520',
                        'batik-cream': '#F5F5DC',
                        'batik-maroon': '#800000'
                    }
                }
            }
        }
    </script>
    <style>
        .batik-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, #DAA520 2px, transparent 2px),
                radial-gradient(circle at 75% 75%, #8B4513 1px, transparent 1px);
            background-size: 50px 50px;
            background-position: 0 0, 25px 25px;
        }
        
        .custom-input, .custom-textarea, .custom-select {
            border: 2px solid #DAA520;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #F5F5DC;
            width: 100%;
        }
        
        .custom-input:focus, .custom-textarea:focus, .custom-select:focus {
            outline: none;
            border-color: #800000;
            box-shadow: 0 0 0 3px rgba(218, 165, 32, 0.2);
            background-color: white;
        }
        
        .custom-button {
            background: linear-gradient(135deg, #800000, #8B4513);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .custom-button:hover {
            background: linear-gradient(135deg, #600000, #654321);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(128, 0, 0, 0.3);
        }
        
        .custom-button.secondary {
            background: linear-gradient(135deg, #DAA520, #B8860B);
            color: #800000;
        }
        
        .custom-button.secondary:hover {
            background: linear-gradient(135deg, #B8860B, #9A7B0A);
        }
        
        .image-preview {
            border: 2px dashed #DAA520;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            background-color: #F5F5DC;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .image-preview:hover {
            border-color: #800000;
            background-color: white;
        }
        
        .image-preview.dragover {
            border-color: #800000;
            background-color: rgba(218, 165, 32, 0.1);
        }
        
        .preview-image {
            max-width: 150px;
            max-height: 150px;
            border-radius: 8px;
            border: 2px solid #DAA520;
        }
        
        .form-section {
            background: white;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 24px;
            border: 2px solid #DAA520;
            box-shadow: 0 4px 12px rgba(218, 165, 32, 0.1);
        }
        
        .section-title {
            color: #800000;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 16px;
            border-bottom: 2px solid #DAA520;
            padding-bottom: 8px;
        }
    </style>
</head>
<body class="bg-batik-cream batik-pattern min-h-screen">
    <!-- Header -->
    <header class="bg-batik-maroon text-white shadow-lg">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                    <div class="w-10 h-10 bg-batik-gold rounded-full flex items-center justify-center">
                        <span class="text-batik-maroon font-bold text-xl">B</span>
                    </div>
                    <h1 class="text-2xl font-bold">Batik Nusantara</h1>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="index.html" class="hover:text-batik-gold transition">Beranda</a>
                    <a href="seller-dashboard.html" class="hover:text-batik-gold transition">Dashboard</a>
                    <a href="products.html" class="hover:text-batik-gold transition">Produk Saya</a>
                    <a href="login.html" class="hover:text-batik-gold transition">Keluar</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-batik-maroon mb-4">Tambah Produk Batik</h2>
                <p class="text-gray-600 text-lg">Daftarkan produk batik Anda untuk dijual di platform kami</p>
            </div>

            <form id="addProductForm" class="space-y-6">
                <!-- Basic Information Section -->
                <div class="form-section">
                    <h3 class="section-title">Informasi Dasar Produk</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="productName" class="block text-batik-maroon font-semibold mb-2">Nama Produk *</label>
                            <input 
                                type="text" 
                                id="productName" 
                                name="productName" 
                                class="custom-input" 
                                placeholder="Contoh: Batik Tulis Parang Jogja"
                                required
                            >
                        </div>
                        
                        <div>
                            <label for="category" class="block text-batik-maroon font-semibold mb-2">Kategori *</label>
                            <select id="category" name="category" class="custom-select" required>
                                <option value="">Pilih Kategori</option>
                                <option value="kemeja">Kemeja Batik</option>
                                <option value="dress">Dress Batik</option>
                                <option value="kain">Kain Batik</option>
                                <option value="blouse">Blouse Batik</option>
                                <option value="sarung">Sarung Batik</option>
                                <option value="aksesoris">Aksesoris Batik</option>
                                <option value="seragam">Seragam Batik</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="description" class="block text-batik-maroon font-semibold mb-2">Deskripsi Produk *</label>
                        <textarea 
                            id="description" 
                            name="description" 
                            rows="4" 
                            class="custom-textarea" 
                            placeholder="Jelaskan detail produk batik Anda, termasuk motif, bahan, dan keunikannya..."
                            required
                        ></textarea>
                    </div>
                </div>

                <!-- Pricing & Stock Section -->
                <div class="form-section">
                    <h3 class="section-title">Harga & Stok</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="price" class="block text-batik-maroon font-semibold mb-2">Harga (Rp) *</label>
                            <input 
                                type="number" 
                                id="price" 
                                name="price" 
                                class="custom-input" 
                                placeholder="150000"
                                min="0"
                                required
                            >
                        </div>
                        
                        <div>
                            <label for="stock" class="block text-batik-maroon font-semibold mb-2">Stok *</label>
                            <input 
                                type="number" 
                                id="stock" 
                                name="stock" 
                                class="custom-input" 
                                placeholder="10"
                                min="0"
                                required
                            >
                        </div>
                        
                        <div>
                            <label for="weight" class="block text-batik-maroon font-semibold mb-2">Berat (gram)</label>
                            <input 
                                type="number" 
                                id="weight" 
                                name="weight" 
                                class="custom-input" 
                                placeholder="300"
                                min="0"
                            >
                        </div>
                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="form-section">
                    <h3 class="section-title">Detail Produk</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="material" class="block text-batik-maroon font-semibold mb-2">Bahan</label>
                            <select id="material" name="material" class="custom-select">
                                <option value="">Pilih Bahan</option>
                                <option value="katun">Katun</option>
                                <option value="sutra">Sutra</option>
                                <option value="rayon">Rayon</option>
                                <option value="polyester">Polyester</option>
                                <option value="campuran">Campuran</option>
                            </select>
                        </div>
                        
                        <div>
                            <label for="technique" class="block text-batik-maroon font-semibold mb-2">Teknik Pembuatan</label>
                            <select id="technique" name="technique" class="custom-select">
                                <option value="">Pilih Teknik</option>
                                <option value="tulis">Batik Tulis</option>
                                <option value="cap">Batik Cap</option>
                                <option value="printing">Batik Printing</option>
                                <option value="kombinasi">Kombinasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <label for="origin" class="block text-batik-maroon font-semibold mb-2">Asal Daerah</label>
                            <input 
                                type="text" 
                                id="origin" 
                                name="origin" 
                                class="custom-input" 
                                placeholder="Contoh: Yogyakarta, Solo, Pekalongan"
                            >
                        </div>
                        
                        <div>
                            <label for="motif" class="block text-batik-maroon font-semibold mb-2">Motif Batik</label>
                            <input 
                                type="text" 
                                id="motif" 
                                name="motif" 
                                class="custom-input" 
                                placeholder="Contoh: Parang, Kawung, Mega Mendung"
                            >
                        </div>
                    </div>
                </div>

                <!-- Size Options Section -->
                <div class="form-section">
                    <h3 class="section-title">Ukuran Tersedia</h3>
                    
                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="sizes[]" value="XS" class="accent-batik-gold">
                            <span class="text-batik-maroon font-medium">XS</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="sizes[]" value="S" class="accent-batik-gold">
                            <span class="text-batik-maroon font-medium">S</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="sizes[]" value="M" class="accent-batik-gold">
                            <span class="text-batik-maroon font-medium">M</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="sizes[]" value="L" class="accent-batik-gold">
                            <span class="text-batik-maroon font-medium">L</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="sizes[]" value="XL" class="accent-batik-gold">
                            <span class="text-batik-maroon font-medium">XL</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="checkbox" name="sizes[]" value="XXL" class="accent-batik-gold">
                            <span class="text-batik-maroon font-medium">XXL</span>
                        </label>
                    </div>
                </div>

                <!-- Images Section -->
                <div class="form-section">
                    <h3 class="section-title">Foto Produk</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Foto Utama *</label>
                            <div class="image-preview" id="mainImagePreview">
                                <input type="file" id="mainImage" name="mainImage" accept="image/*" class="hidden" required>
                                <div class="preview-content">
                                    <div class="text-6xl text-batik-gold mb-4">📷</div>
                                    <p class="text-batik-maroon font-medium">Klik atau seret foto utama produk</p>
                                    <p class="text-sm text-gray-500 mt-2">Format: JPG, PNG (Max: 5MB)</p>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-batik-maroon font-semibold mb-2">Foto Tambahan</label>
                            <div class="image-preview" id="additionalImagesPreview">
                                <input type="file" id="additionalImages" name="additionalImages[]" accept="image/*" multiple class="hidden">
                                <div class="preview-content">
                                    <div class="text-6xl text-batik-gold mb-4">🖼️</div>
                                    <p class="text-batik-maroon font-medium">Klik atau seret foto tambahan</p>
                                    <p class="text-sm text-gray-500 mt-2">Maksimal 5 foto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div id="imagePreviewContainer" class="mt-6 grid grid-cols-2 md:grid-cols-4 gap-4 hidden">
                        <!-- Preview images will be displayed here -->
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col md:flex-row gap-4 justify-center pt-6">
                    <button type="button" class="custom-button secondary px-8 py-3" onclick="saveDraft()">
                        💾 Simpan Draft
                    </button>
                    <button type="submit" class="custom-button px-8 py-3">
                        ✅ Publikasikan Produk
                    </button>
                    <button type="button" class="custom-button secondary px-8 py-3" onclick="previewProduct()">
                        👁️ Preview
                    </button>
                </div>
            </form>
        </div>
    </div>

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
            const container = document.getElementById('imagePreviewContainer');
            const preview = document.getElementById(previewId);
            
            if (files.length > 0) {
                container.classList.remove('hidden');
                
                // Clear existing previews for this input
                const existingPreviews = container.querySelectorAll(`[data-preview="${previewId}"]`);
                existingPreviews.forEach(p => p.remove());
                
                Array.from(files).forEach((file, index) => {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            const previewDiv = document.createElement('div');
                            previewDiv.className = 'relative';
                            previewDiv.setAttribute('data-preview', previewId);
                            
                            previewDiv.innerHTML = `
                                <img src="${e.target.result}" class="preview-image w-full h-32 object-cover">
                                <button type="button" class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 text-xs" onclick="this.parentElement.remove()">×</button>
                            `;
                            
                            container.appendChild(previewDiv);
                        };
                        reader.readAsDataURL(file);
                    }
                });
                
                // Update preview area
                preview.querySelector('.preview-content').innerHTML = `
                    <div class="text-4xl text-green-600 mb-2">✅</div>
                    <p class="text-batik-maroon font-medium">${files.length} foto dipilih</p>
                `;
            }
        }
        
        // Initialize image uploads
        setupImageUpload('mainImagePreview', 'mainImage');
        setupImageUpload('additionalImagesPreview', 'additionalImages');
        
        // Form validation and submission
        document.getElementById('addProductForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validate required fields
            const requiredFields = ['productName', 'category', 'description', 'price', 'stock'];
            let isValid = true;
            
            requiredFields.forEach(fieldName => {
                const field = document.getElementById(fieldName);
                if (!field.value.trim()) {
                    field.style.borderColor = '#dc2626';
                    isValid = false;
                } else {
                    field.style.borderColor = '#DAA520';
                }
            });
            
            // Check if main image is uploaded
            const mainImage = document.getElementById('mainImage');
            if (!mainImage.files.length) {
                alert('Mohon upload foto utama produk!');
                return;
            }
            
            if (!isValid) {
                alert('Mohon lengkapi semua field yang wajib diisi!');
                return;
            }
            
            // Simulate form submission
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            submitButton.innerHTML = '⏳ Memproses...';
            submitButton.disabled = true;
            
            setTimeout(() => {
                alert('Produk berhasil dipublikasikan! Produk Anda akan segera tampil di marketplace.');
                window.location.href = 'seller-dashboard.html';
            }, 2000);
        });
        
        // Save draft function
        function saveDraft() {
            const formData = new FormData(document.getElementById('addProductForm'));
            
            // Simulate saving draft
            alert('Draft produk berhasil disimpan! Anda dapat melanjutkan nanti.');
        }
        
        // Preview function
        function previewProduct() {
            const productName = document.getElementById('productName').value;
            const price = document.getElementById('price').value;
            const description = document.getElementById('description').value;
            
            if (!productName || !price) {
                alert('Mohon isi nama produk dan harga untuk preview!');
                return;
            }
            
            // Create preview modal or redirect to preview page
            alert(`Preview Produk:\n\nNama: ${productName}\nHarga: Rp ${parseInt(price).toLocaleString('id-ID')}\nDeskripsi: ${description.substring(0, 100)}...`);
        }
        
        // Auto-format price input
        document.getElementById('price').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            e.target.value = value;
        });
        
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
    </script>
</body>
</html>
