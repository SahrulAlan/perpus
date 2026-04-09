 <style>
     :root {
         --primary-bg: #0b1f38;
         /* Warna biru gelap / navy */
         --accent-color: #0056b3;
     }

     body {
         font-family: "Inter", "Segoe UI", sans-serif;
         background-color: #f4f7f6;
     }

     /* Navbar Customization */
     .navbar {
         background-color: rgba(255, 255, 255, 0.95);
         backdrop-filter: blur(10px);
     }

     .navbar-brand {
         font-weight: 700;
         color: var(--primary-bg) !important;
     }

     /* Hero Section */
     .hero-section {
         background:
             linear-gradient(135deg,
                 rgba(11, 31, 56, 0.9),
                 rgba(0, 86, 179, 0.8)),
             url("/assets/images/bg.jpeg") center/cover no-repeat fixed;
         color: white;
         padding: 200px 0 100px;
         border-bottom-left-radius: 50px;
         border-bottom-right-radius: 50px;
         margin-bottom: 50px;
     }

     /* Hover Effects for Cards */
     .system-card,
     .team-card {
         border: none;
         border-radius: 16px;
         transition: all 0.3s ease-in-out;
         background-color: white;
         z-index: 1;
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
     }

     /* Team Image Customization */
     .team-img {
         width: 130px;
         height: 130px;
         object-fit: cover;
         border: 4px solid #eef4fa;
         transition: 0.3s;
     }

     .team-card:hover .team-img {
         border-color: var(--accent-color);
     }

     /* Button Customization */
     .btn-custom {
         background-color: var(--primary-bg);
         color: white;
         border-radius: 30px;
         padding: 10px 25px;
         font-weight: 600;
         transition: 0.3s;
     }

     .btn-custom:hover {
         background-color: var(--accent-color);
         color: white;
         box-shadow: 0 5px 15px rgba(0, 86, 179, 0.4);
     }

     /* News Section Customization */
     .news-card {
         border: none;
         border-radius: 16px;
         overflow: hidden;
         transition: 0.3s;
     }

     .news-card:hover {
         box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08) !important;
     }

     .news-card img {
         height: 200px;
         object-fit: cover;
     }

     /* Footer */
     footer {
         background-color: var(--primary-bg);
         color: #d1d5db;
     }

     body {
         padding-top: 70px !important;
     }

     /* Typography isi berita */
     .news-content p {
         margin-bottom: 1.5rem;
     }

     .news-content blockquote {
         font-style: italic;
         background: #f8fafc;
         border-radius: 8px;
     }

     /* Hover sidebar */
     .card h6:hover {
         color: var(--accent-color);
         cursor: pointer;
     }
 </style>
