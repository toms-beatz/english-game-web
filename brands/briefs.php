<?php
$campainAim = array(
    "Valentine's Day ❤️",
    "Black Friday 💸",
    "Christmas 🎅🏻",
    "Mother's Day 👩‍👦",
    "Easter 🐣",
    "Social media engagement 🔗",
    "RSE engagement 🌱",
    "Promotional offers 💰",
    "Partnership with social media influencers 🤝🏻",
    "New products 🆕",
    "Press Day 📝"
);

$public = array(
    "18-25 y/o ",
    "25-35 y/o",
    "35-45 y/o",
    "40-50 y/o",
    "50-60 y/o",
    "60-70 y/o",
    "80+ y/o"
);

$support = array(
    "Web 🌐",
    "Print 🖨️",
    "Web + Print"
);

$tones = array(
        "Provocative",
        "Romantic",
        "Visionary",
        "Luxurious",
        "Neutral",
        "Elegant",
        "Dynamic",
        "Friendly",
        "Humoristic",
        "Emotional"
);


$colors = array(
        "Brown",
        "Yellow",
        "Blue",
        "White",
        "Black",
        "Red",
        "Purple",
        "Orange",
        "Green",
        "Pink"
);

$fontfaces = array(
        "Artigo",
        "Adobe Caslon Pro",
        "Adobe Handwriting",
        "All Round Gothic",
        "Alfarn 2",
        "Bely Display",
        "Fino Sans",
        "Cortado",
        "Juniper STD",
        "Ultra"
);

$randomToneKey = array_rand($tones, 1);
$randomColorKey = array_rand($colors, 1);
$randomFontfaceKey = array_rand($fontfaces, 1);

$toAvoid = array(
    "Tone" => $tones[$randomToneKey],
    "Color" => $colors[$randomColorKey],
    "Typography" => $fontfaces[$randomFontfaceKey]
);

