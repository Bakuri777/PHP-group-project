<?php

$site = [
    "title" => "Mico",
    "phone" => "+33 555 555 555",
    "email" => "bakuri@gmail.com",
    "location" => "Tbilisi, Strasbourg",
    "logo" => "images/logo.png"
];

$navLinks = [
    "index" => ["label" => "Home", "url" => "index.php"],
    "about" => ["label" => "About", "url" => "index.php#about"],
    "treatment" => ["label" => "Treatment", "url" => "index.php#treatment"],
    "doctor" => ["label" => "Doctors", "url" => "index.php#doctor"],
    "testimonial" => ["label" => "Testimonial", "url" => "index.php#testimonial"],
    "contact" => ["label" => "Contact Us", "url" => "index.php#contact"]
];

$sliderItems = [
    [
        "title_top" => "Mico",
        "title_bottom" => "Hospital",
        "text" => "Clean, modern clinic with professional staff.",
        "button_text" => "Contact Us",
        "button_link" => "index.php#contact",
        "image" => "images/slider-img.jpg"
    ],
    [
        "title_top" => "Mico",
        "title_bottom" => "Hospital",
        "text" => "We provide high quality medical services.",
        "button_text" => "Contact Us",
        "button_link" => "index.php#contact",
        "image" => "images/slider-img.jpg"
    ],
    [
        "title_top" => "Mico",
        "title_bottom" => "Hospital",
        "text" => "Your health is our priority.",
        "button_text" => "Contact Us",
        "button_link" => "index.php#contact",
        "image" => "images/slider-img.jpg"
    ]
];

$appointmentDepartments = [
    "Nephrologist Care",
    "Eye Care",
    "Pediatrician Clinic",
    "Parental Care",
    "Brain Surgery",
    "AI Cardiology"
];

$doctors = [
    [
        "name" => "Hennry",
        "degree" => "MBBS",
        "image" => "images/team1.jpg",
        "social" => ["facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"]
    ],
    [
        "name" => "Jenni",
        "degree" => "MBBS",
        "image" => "images/team2.jpg",
        "social" => ["facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"]
    ],
    [
        "name" => "Morco",
        "degree" => "MBBS",
        "image" => "images/team3.jpg",
        "social" => ["facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"]
    ],
    [
        "name" => "Vladimer Natsvlishvili",
        "degree" => "Brain Surgeon",
        "image" => "images/me.jpg",
        "social" => ["facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"]
    ],
    [
        "name" => "Bakuri Dzaganidze 🤖",
        "degree" => "AI Cardiologist ❤️",
        "image" => "images/bakuri.jpg",
        "social" => ["facebook" => "#", "twitter" => "#", "linkedin" => "#", "instagram" => "#"]
    ]
];

$appointmentDoctors = array_column($doctors, 'name');

$about = [
    "title" => "About",
    "highlight" => "Hospital",
    "text" => "Modern clinic with professional doctors and high-quality service.",
    "image" => "images/about-img.jpg",
    "button_text" => "Read More",
    "button_link" => "index.php#about"
];

$treatments = [
    [
        "title" => "Nephrologist Care",
        "text" => "Professional kidney treatment.",
        "image" => "images/t1.png",
        "link" => "index.php#treatment"
    ],
    [
        "title" => "Eye Care",
        "text" => "Advanced eye diagnostics and surgery.",
        "image" => "images/t2.png",
        "link" => "index.php#treatment"
    ],
    [
        "title" => "Pediatrician Clinic",
        "text" => "Best care for children.",
        "image" => "images/t3.png",
        "link" => "index.php#treatment"
    ],
    [
        "title" => "Parental Care",
        "text" => "Support for families and parents.",
        "image" => "images/t4.png",
        "link" => "index.php#treatment"
    ]
];

$testimonials = [
    [
        "name" => "Emily Carter",
        "subtitle" => "Satisfied Patient",
        "text" => "Professional doctors and great service."
    ],
    [
        "name" => "Michael Brown",
        "subtitle" => "Happy Client",
        "text" => "Easy appointment booking and friendly staff."
    ],
    [
        "name" => "Sophia Wilson",
        "subtitle" => "Regular Visitor",
        "text" => "Always reliable and clean clinic."
    ]
];

$latestPosts = [
    ["image" => "images/post1.jpg", "text" => "Health tips"],
    ["image" => "images/post2.jpg", "text" => "Clinic news"]
];

$newsPosts = [
    ["image" => "images/post3.jpg", "text" => "Medical updates"],
    ["image" => "images/post4.png", "text" => "Technology in healthcare"]
];