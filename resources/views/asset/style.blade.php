<style>
    :root {
        --primary-bg: #0b1f38;
        --accent-color: #0056b3;
        --gradient-start: #0b1f38;
        --gradient-end: #1a3a6b;
    }

    * {
        scroll-behavior: smooth;
    }

    body {
        font-family: "Inter", "Segoe UI", sans-serif;
        background-color: #f4f7f6;
        padding-top: 70px !important;
        overflow-x: hidden;
    }

    /* ========== NAVBAR ========== */
    .navbar {
        background-color: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .navbar.scrolled {
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-bg) !important;
    }

    /* ========== HERO SECTION (Landing Page) ========== */
    .hero-section {
        background: linear-gradient(135deg, rgba(11, 31, 56, 0.9), rgba(0, 86, 179, 0.8)),
            url("/assets/images/bg.jpeg") center/cover no-repeat fixed;
        color: white;
        padding: 180px 0 180px;
        border-bottom-left-radius: 50px;
        border-bottom-right-radius: 50px;
        margin-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    /* Tambahkan ini - container untuk konten hero */
    .hero-content {
        position: relative;
        z-index: 2;
    }

    /* Hero tambahan untuk style baru */
    .hero-badge {
        animation: fadeInUp 0.6s ease;
    }

    .animate-title {
        animation: fadeInUp 0.8s ease 0.2s both;
    }

    .animate-text {
        animation: fadeInUp 0.8s ease 0.4s both;
    }

    .hero-buttons {
        animation: fadeInUp 0.8s ease 0.6s both;
        margin-bottom: 60px;
    }

    .hero-wave {
        position: absolute;
        bottom: 0px;
        left: 0;
        width: 100%;
        line-height: 0;
    }

    /* Pastikan konten di atas wave */
    .hero-section .container {
        position: relative;
        z-index: 2;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Text Gradient - 2 versi */
    .text-gradient-light {
        background: linear-gradient(135deg, #fff, #a8c8ff);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .text-gradient-dark {
        background: linear-gradient(135deg, var(--primary-bg), var(--accent-color));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* ========== SYSTEM CARDS (Landing Page) ========== */
    .system-card {
        border: none;
        border-radius: 16px;
        transition: all 0.3s ease-in-out;
        background-color: white;
        z-index: 1;
        position: relative;
        overflow: hidden;
    }

    /* Efek garis atas untuk style baru */
    .system-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-bg), var(--accent-color));
        transition: left 0.4s ease;
    }

    .system-card:hover::before {
        left: 0;
    }

    .system-card:hover,
    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    .icon-wrapper {
        width: 80px;
        height: 80px;
        background-color: #eef4fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        color: var(--accent-color);
        transition: all 0.3s ease;
    }

    .system-card:hover .icon-wrapper {
        transform: scale(1.05);
        background: linear-gradient(135deg, var(--primary-bg), var(--accent-color));
        color: white;
    }

    .badge-system {
        background: #eef4fa;
        color: var(--accent-color);
        font-size: 0.7rem;
        padding: 4px 12px;
        border-radius: 20px;
        display: inline-block;
    }

    .feature-list small {
        font-size: 0.75rem;
        margin-bottom: 5px;
    }

    /* ========== BUTTONS ========== */
    .btn-custom {
        background: linear-gradient(135deg, var(--primary-bg), var(--accent-color));
        color: white;
        border-radius: 30px;
        padding: 10px 25px;
        font-weight: 600;
        transition: 0.3s;
        border: none;
    }

    .btn-custom:hover {
        background-color: var(--accent-color);
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 86, 179, 0.3);
        color: white;
    }

    /* ========== TEAM CARDS (Landing Page) ========== */
    .team-card {
        border: none;
        border-radius: 16px;
        transition: all 0.3s ease-in-out;
        background-color: white;
        z-index: 1;
        position: relative;
    }

    .team-img-wrapper {
        position: relative;
        display: inline-block;
    }

    .team-img {
        width: 130px;
        height: 130px;
        object-fit: cover;
        border: 4px solid #eef4fa;
        transition: 0.3s;
    }

    .team-card:hover .team-img {
        border-color: var(--accent-color);
        transform: scale(1.02);
    }

    .team-social {
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 8px;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .team-card:hover .team-social {
        opacity: 1;
        bottom: 5px;
    }

    .team-social .btn {
        width: 30px;
        height: 30px;
        padding: 0;
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .divider {
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, var(--primary-bg), var(--accent-color));
        border-radius: 2px;
        margin: 10px auto;
    }

    /* ========== OPERASIONAL SECTION ========== */
    .modern-card {
        background: linear-gradient(135deg, var(--primary-bg), var(--gradient-end));
        position: relative;
        overflow: hidden;
    }

    .modern-card::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.05) 0%, transparent 70%);
    }

    .divider-light {
        width: 60px;
        height: 3px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 3px;
        margin: 15px auto;
    }

    .schedule-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s ease;
    }

    .schedule-item:hover {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 12px;
        padding-left: 10px;
    }

    .break-time {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.85rem;
        margin-top: -8px;
        padding-bottom: 8px;
    }

    .info-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .info-card:hover {
        transform: translateX(8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
    }

    .info-icon {
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* ========== NEWS CARDS (Untuk Landing & Halaman Berita) ========== */
    .news-card {
        border: none;
        border-radius: 16px;
        overflow: hidden;
        transition: 0.3s;
        background: white;
    }

    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .news-card img {
        height: 200px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-card:hover img {
        transform: scale(1.05);
    }

    /* Date Badge untuk Landing Page */
    .news-date-badge {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: white;
        border-radius: 12px;
        padding: 5px 12px;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    .news-date-badge .day {
        font-size: 18px;
        font-weight: bold;
        color: var(--primary-bg);
        display: block;
        line-height: 1;
    }

    .news-date-badge .month {
        font-size: 10px;
        color: var(--accent-color);
        text-transform: uppercase;
    }

    .news-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* ========== CONTACT CARDS ========== */
    .contact-card {
        transition: all 0.3s ease;
        background: white;
        border: none;
        border-radius: 16px;
    }

    .contact-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .contact-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-bg), var(--accent-color));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }

    .contact-icon i {
        font-size: 30px;
        color: white;
    }

    .contact-detail {
        font-size: 0.9rem;
        line-height: 1.6;
    }

    .contact-detail a {
        color: var(--accent-color);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .contact-detail a:hover {
        color: var(--primary-bg);
    }

    /* ========== WHATSAPP CARD ========== */
    .whatsapp-card {
        background: linear-gradient(135deg, #075E54, #128C7E);
        position: relative;
        border: none;
        border-radius: 16px;
    }

    .whatsapp-bg {
        position: absolute;
        top: -50%;
        right: -20%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, transparent 70%);
        border-radius: 50%;
    }

    .whatsapp-icon {
        width: 70px;
        height: 70px;
        background: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .whatsapp-icon i {
        font-size: 40px;
        color: #075E54;
    }

    /* ========== SOCIAL BUTTONS ========== */
    .social-btn {
        padding: 10px 25px;
        border-radius: 50px;
        text-decoration: none;
        color: white;
        font-weight: 500;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
    }

    .social-btn.facebook {
        background: #1877f2;
    }

    .social-btn.youtube {
        background: #ff0000;
    }

    .social-btn.instagram {
        background: linear-gradient(45deg, #f09433, #d62976);
    }

    .social-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        color: white;
    }

    /* ========== FOOTER ========== */
    footer {
        background: linear-gradient(135deg, var(--primary-bg), var(--gradient-end));
        color: #d1d5db;
        padding: 50px 0 20px;
        margin-top: 50px;
    }

    footer a {
        color: #a8c8ff;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: white;
    }

    footer .border-top {
        border-color: rgba(255, 255, 255, 0.1) !important;
    }

    /* ========== HALAMAN BERITA (List & Detail) ========== */
    .page-header-offset {
        padding-top: 30px;
    }

    /* Konten berita detail */
    .news-content p {
        margin-bottom: 1.5rem;
    }

    .news-content blockquote {
        font-style: italic;
        background: #f8fafc;
        border-radius: 8px;
        padding: 15px 20px;
        border-left: 4px solid var(--accent-color);
    }

    /* Hover sidebar rekomendasi */
    .card h6:hover {
        color: var(--accent-color);
        cursor: pointer;
    }

    /* Sidebar rekomendasi */
    .sidebar-rekomendasi a {
        transition: all 0.3s ease;
    }

    .sidebar-rekomendasi a:hover {
        transform: translateX(5px);
    }

    /* Pagination styling */
    .pagination {
        margin-top: 30px;
    }

    .pagination .page-link {
        border-radius: 8px;
        margin: 0 3px;
        color: var(--primary-bg);
    }

    .pagination .page-item.active .page-link {
        background: var(--primary-bg);
        border-color: var(--primary-bg);
    }

    /* Form search & filter */
    .input-group-text {
        border-radius: 30px 0 0 30px;
    }

    .rounded-end-pill {
        border-radius: 0 30px 30px 0;
    }

    .rounded-pill {
        border-radius: 30px;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
        .hero-section {
            padding: 120px 0 80px;
        }

        .display-4 {
            font-size: 2rem;
        }

        .hero-buttons .btn {
            margin-bottom: 10px;
            display: block;
        }

        .hero-buttons .btn:first-child {
            margin-right: 0 !important;
            margin-bottom: 15px;
        }

        .news-card img {
            height: 180px;
        }
    }

    /* Wrapper */
    .org-image-wrapper {
        display: inline-block;
        padding: 10px;
        border-radius: 20px;
        background: linear-gradient(135deg, #f8f9fa, #ffffff);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    /* Image */
    .org-image {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        transition: all 0.3s ease;
        cursor: zoom-in;
    }

    /* Hover efek */
    .org-image:hover {
        transform: scale(1.02);
    }
</style>
