<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Batik Nusantara</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CropperJS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">

    <!-- CropperJS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

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

        .custom-input,
        .custom-textarea,
        .custom-select {
            border: 2px solid #DAA520;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #F5F5DC;
            width: 100%;
        }

        .custom-input:focus,
        .custom-textarea:focus,
        .custom-select:focus {
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
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>
    @stack('scripts')
</body>

</html>
