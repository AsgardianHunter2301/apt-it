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

<!-- Main content -->
<main class="container">
    <!-- Section 1 -->
    <div class="domain domain6">
        <h2>Time Improvement Management Engine [TIME]</h2>
        <img src="/images/permutations.png" alt="TIME Image">
        <p>Advanced scheduling and calendaring for optimizing productivity and time management.</p>
    </div>

    <!-- Section 2 -->
    <div class="domain domain6">
        <h2>Effective Time Allocation</h2>
        <img src="/images/time_allocation.jpg" alt="Effective Time Allocation">
        <p>Strategies for managing and allocating your time effectively for both personal and professional success.</p>
    </div>

    <!-- Section 3 -->
    <div class="domain domain6">
        <h2>Maximizing Productivity</h2>
        <img src="/images/productivity.jpg" alt="Maximizing Productivity">
        <p>Utilizing tools and techniques that enhance productivity in daily tasks and long-term projects.</p>
    </div>

    <!-- Section 4 -->
    <div class="domain domain6">
        <h2>Time for Innovation</h2>
        <img src="/images/time_innovation.jpg" alt="Time for Innovation">
        <p>Leveraging the concept of time management to encourage innovation and creative thinking in business and technology.</p>
    </div>

    <!-- Section 5 -->
    <div class="domain domain6">
        <h2>Overcoming Procrastination</h2>
        <img src="/images/overcoming_procrastination.jpg" alt="Overcoming Procrastination">
        <p>Learn techniques and mental shifts to defeat procrastination and keep your focus on achieving goals.</p>
    </div>

    <!-- Section 6 -->
    <div class="domain domain6">
        <h2>The Future of Time Management</h2>
        <img src="/images/future_time_management.jpg" alt="Future of Time Management">
        <p>Exploring how evolving technologies will shape the future of time management systems and enhance our personal and work life.</p>
    </div>
</main>

<?php
    // Common footer file (include footer.php)
    include 'footer.php'; 
?>
