<?php
    // Common header file (include header.php)
    include 'header.php'; 
?>
 
<nav class="navbar">
    <?php
        $current_path = $_SERVER['REQUEST_URI']; // Get the current URL path
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

<!-- Main content -->
<main class="container">
    <!-- Section 1 -->
    <div class="domain domain1">
        <h2>Strategically Adaptable Growing Education [SAGE]</h2>
        <img src="/images/life_tree.jpg" alt="SAGE Image">
        <p>An adaptive intelligence-powered learning application, with the goal of proliferating education and making it accessible to everyone.</p>
    </div>

    <!-- Section 2 -->
    <div class="domain domain1">
        <h2>AI-Powered Learning</h2>
        <img src="/images/ai_learning.jpg" alt="AI-Powered Learning">
        <p>Harnessing AI technology to provide personalized learning experiences tailored to individual needs and goals.</p>
    </div>

    <!-- Section 3 -->
    <div class="domain domain1">
        <h2>Accessible Education for All</h2>
        <img src="/images/accessible_education.jpg" alt="Accessible Education">
        <p>Focusing on breaking down barriers to education and making learning resources available to everyone, regardless of background or location.</p>
    </div>

    <!-- Section 4 -->
    <div class="domain domain1">
        <h2>Interactive Learning Tools</h2>
        <img src="/images/interactive_learning.jpg" alt="Interactive Learning Tools">
        <p>Providing engaging tools to help students understand complex concepts and apply knowledge in real-world scenarios.</p>
    </div>

    <!-- Section 5 -->
    <div class="domain domain1">
        <h2>Future-Ready Education</h2>
        <img src="/images/future_education.jpg" alt="Future-Ready Education">
        <p>Preparing students for the rapidly changing technological landscape by equipping them with the skills and knowledge needed for tomorrow’s challenges.</p>
    </div>

    <!-- Section 6 -->
    <div class="domain domain1">
        <h2>Collaborative Learning Community</h2>
        <img src="/images/collaborative_learning.jpg" alt="Collaborative Learning">
        <p>Encouraging collaboration among learners, fostering knowledge-sharing and teamwork to solve problems and create innovative solutions.</p>
    </div>
</main>

<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>
