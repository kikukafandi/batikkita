<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebatik.id - Platform E-commerce Batik UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
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
        
        .custom-input {
            border: 2px solid #DAA520;
            border-radius: 8px;
            padding: 12px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #F5F5DC;
        }
        
        .custom-input:focus {
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
        
        .custom-button-secondary {
            background: linear-gradient(135deg, #DAA520, #B8860B);
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .custom-button-secondary:hover {
            background: linear-gradient(135deg, #B8860B, #9A7209);
            transform: translateY(-1px);
        }
        
        .profile-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 3px solid #DAA520;
            overflow: hidden;
        }
        
        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #DAA520;
            object-fit: cover;
        }
        
        .tab-button {
            padding: 12px 24px;
            border: none;
            background: transparent;
            color: #8B4513;
            font-weight: 600;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
        }
        
        .tab-button.active {
            color: #800000;
            border-bottom-color: #DAA520;
            background-color: rgba(218, 165, 32, 0.1);
        }
        
        .tab-button:hover {
            background-color: rgba(218, 165, 32, 0.05);
        }
        
        .order-card {
            border: 2px solid #DAA520;
            border-radius: 12px;
            padding: 16px;
            background: #F5F5DC;
            transition: all 0.3s ease;
        }
        
        .order-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(218, 165, 32, 0.2);
        }
        
        .status-badge {
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .status-pending {
            background-color: #FFF3CD;
            color: #856404;
        }
        
        .status-processing {
            background-color: #CCE5FF;
            color: #004085;
        }
        
        .status-shipped {
            background-color: #D4EDDA;
            color: #155724;
        }
        
        .status-delivered {
            background-color: #D1ECF1;
            color: #0C5460;
        }
    </style>
</head>

<body class="bg-batik-cream">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @stack('scripts')
</body>

</html>
