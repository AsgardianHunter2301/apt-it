<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the common header
include 'header.php';

// Determine current page
$current_page = isset($_GET['page']) ? strtolower($_GET['page']) : 'home';
?>

<nav class="navbar">
    <?php
        $navItems = [
            "AI" => ["label" => "[AI]", "page" => "ai.php"],
            "AIR" => ["label" => "[AIR]", "page" => "air.php"],
            "FIRE" => ["label" => "[FIRE]", "page" => "fire.php"],
            "LIFE" => ["label" => "[LIFE]", "page" => "life.php"],
            "SAGE" => ["label" => "[SAGE]", "page" => "sage.php"],
            "TIME" => ["label" => "[TIME]", "page" => "time.php"],
            "NOT-BAD" => ["label" => "[NOT-BAD]", "page" => "not-bad.php"],
            "ET" => ["label" => "[ET]", "page" => "erythrocyte.php"]
        ];

        foreach ($navItems as $id => $data) {
            $activeClass = ($current_page === basename($data['page'], '.php')) ? 'active' : '';
            // Pass the page name to the JavaScript function
            echo "<a href=\"javascript:void(0);\" id=\"$id\" class=\"$activeClass\" onclick=\"redirectToPage('{$data['page']}')\">{$data['label']}</a>";
        }
    ?>
</nav>

<div class="divider"></div>

<main class="container">
    <?php
        // AI-related content chunks
        $ai_chunks = [
            [
                "class" => "domain3",
                "title" => "Introduction to Algorithmic Intelligence [AI]",
                "description" => "Start learning mathematics from the basics, gradually progressing to higher-level concepts that enable advanced applications in AI.",
                "image" => "images/algorithms.jpg",
                "alt" => "Introduction to AI"
            ],
            [
                "class" => "domain3",
                "title" => "Mathematics Foundations for AI",
                "description" => "Understanding key mathematical principles like algebra, calculus, and probability theory that form the backbone of AI technologies.",
                "alt" => "Mathematics for AI"
            ],
            [
                "class" => "domain3",
                "title" => "AI Models and Algorithms",
                "description" => "Delve into machine learning algorithms, neural networks, and their role in solving real-world problems through algorithmic intelligence.",
                "alt" => "AI Models and Algorithms"
            ],
            [
                "class" => "domain3",
                "title" => "Data Structures and Their Role in AI",
                "description" => "Learn about the essential data structures (like trees, graphs, and arrays) that optimize AI algorithms for better performance and efficiency.",
                "alt" => "Data Structures in AI"
            ],
            [
                "class" => "domain3",
                "title" => "AI in Practice: Real-World Applications",
                "description" => "Explore practical uses of AI, including its impact on industries like healthcare, finance, and robotics.",
                "alt" => "Real-World AI Applications"
            ],
            [
                "class" => "domain3",
                "title" => "The Future of AI",
                "description" => "The possibilities of AI are limitless. Understand the emerging trends and the future trajectory of AI research and development.",
                "alt" => "Future of AI"
            ]
        ];

        // Displaying the AI content chunks
        foreach ($ai_chunks as $id => $chunk) {
            echo "<div id='$id' class='domain {$chunk['class']}'>";
            
            // Check if the image exists and display it
            if (isset($chunk['image'])) {
                echo "<img src='{$chunk['image']}' alt='{$chunk['alt']}'>";
            }
            
            // Display the title and description
            echo "<h2>{$chunk['title']}</h2>";
            echo "<p>{$chunk['description']}</p>";
            echo "</div>";
        }
    ?>
</main>


<?php
include 'footer.php';
ob_end_flush();
?>
