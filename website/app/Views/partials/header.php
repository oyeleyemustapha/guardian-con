<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <base href="<?php echo base_url(); ?>">
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="Guardian Newspapers Change of Name" />
    <meta property="og:title" content="Change of Name - Guardian Newspapers" />
    <meta property="og:description" content="Announce your name change officially in The Guardian, complete your change of name publication in four easy steps." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://guardian.ng/change-of-name" />
    <meta property="og:image" content="<?php echo base_url('assets/build/img/logo.png'); ?>" />
    <meta property="og:image:width" content="692" />
    <meta property="og:image:height" content="110" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@GuardianNigeria" />
    <meta name="twitter:creator" content="@GuardianNigeria" />
    <meta name="twitter:title" content="Change of Name - Guardian Newspapers" />
    <meta name="twitter:description" content="Announce your name change officially in The Guardian, complete your change of name publication in four easy steps." />
    <meta name="twitter:image" content="<?php echo base_url('assets/build/img/logo.png'); ?>" />
    <meta name="twitter:image:alt" content="Guardian Newspapers Logo" />
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "<?php echo $pageTitle; ?>",
        "url": "<?php echo current_url(); ?>",
        "description": "Announce your name change officially in The Guardian, complete your change of name publication in four easy steps.",
        "inLanguage": "en",
        "isPartOf": {
            "@type": "WebSite",
            "name": "Guardian Newspapers",
            "url": "https://www.guardian.ng"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Guardian Newspapers",
            "url": "https://www.guardian.ng",
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo base_url('assets/build/img/logo.png'); ?>",
                "width": 692,
                "height": 110
            },
            "sameAs": [
                "https://web.facebook.com/guardianng",
                "https://x.com/GuardianNigeria",
                "https://www.linkedin.com/company/guardian-newspapers-limited/"
            ]
        },
        "mainEntity": {
            "@type": "Organization",
            "name": "Guardian Newspapers",
            "url": "https://www.guardian.ng",
            "description": "The Guardian Nigeria News - Nigeria and World News",
            "foundingDate": "1983",
            "founder": {
                "@type": "Person",
                "name": "Alex Ibru"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+2347012337923",
                "contactType": "Customer Support",
                "areaServed": "Worldwide"
            }
        },
        "datePublished": "<?php echo (new DateTime('now', new DateTimeZone('UTC')))->format('c'); ?>",
        "dateModified": "<?php echo (new DateTime('now', new DateTimeZone('UTC')))->format('c'); ?>"
    }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/build/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/build/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/build/img/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="node_modules/jquery-toast-plugin/dist/jquery.toast.min.css">
    <link rel="stylesheet" type="text/css" href="assets/build/css/style.min.css">
    <title>
        <?php echo $pageTitle; ?>
    </title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="assets/build/img/logo.png" width="250" alt="Guardian Newspapers Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-autoo mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faqs">FAQS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://guardian-help.freshdesk.com/support/tickets/new" target="_blank"> Support Ticket</a>
                    </li>
                </ul>
                <a href="<?php echo base_url('track-application'); ?>" class="trackBtn">track announcement</a>
            </div>
        </nav>
    </div>