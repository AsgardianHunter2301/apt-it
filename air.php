<?php
    // Common header file (include header.php)
    include 'header.php'; 
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
    <div class="domain domain5">
        <h2>Algorithmic Intelligence [AI]</h2>
        <img src="/images/algorithms.jpg" alt="AI Image">
        <p>Exploring foundational concepts of mathematics and algorithms to build more advanced AI models and systems.</p>
    </div>
    <div class="domain domain5">
        <h2>AI Research</h2>
        <img src="/images/ai_research.jpg" alt="AI Research">
        <p>Advancing AI research through innovative models that can solve real-world problems in fields such as finance, healthcare, and engineering.</p>
    </div>
    <div class="domain domain5">
        <h2>AI Education</h2>
        <img src="/images/ai_education.jpg" alt="AI Education">
        <p>Empowering future innovators by providing comprehensive education on AI technologies, principles, and ethical considerations.</p>
    </div>
    <div class="domain domain5">
        <h2>Machine Learning</h2>
        <img src="/images/machine_learning.jpg" alt="Machine Learning">
        <p>Diving into machine learning algorithms and their real-world applications in fields ranging from self-driving cars to predictive analytics.</p>
    </div>
    <div class="domain domain5">
        <h2>AI in Robotics</h2>
        <img src="/images/robotics.jpg" alt="AI in Robotics">
        <p>Leveraging AI to improve robotics capabilities for smarter automation, enabling robots to learn from experience and optimize their performance.</p>
    </div>
    <div class="domain domain5">
        <h2>AI for Healthcare</h2>
        <img src="/images/healthcare_ai.jpg" alt="AI for Healthcare">
        <p>Harnessing AI to revolutionize healthcare systems by improving diagnostic accuracy, personalizing treatment plans, and enhancing patient care.</p>
    </div>
</main>


<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>
