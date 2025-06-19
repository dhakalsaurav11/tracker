<div class="sidebar">
    <div class="tracker-container">
        <h3><i class="fas fa-download"></i> Downloads</h3>
        <div class="tracker-box">
            <p>Total Downloads:</p>
            <strong id="click-count"><?= $click_count; ?></strong>
            <div class="progress-bar">
                <div id="progress-fill" style="width: <?= min(($click_count / 100) * 100, 100); ?>%;"></div>
            </div>
        </div>
    </div>
</div>

<style>
/* Sidebar Styling */
.sidebar {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
    font-family: Arial, sans-serif;
}

/* Tracker Box */
.tracker-container {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.08);
}

/* Header */
.tracker-container h3 {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

/* Click Counter */
.tracker-box {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    font-size: 22px;
    color: #007bff;
    font-weight: bold;
    box-shadow: inset 0px 2px 6px rgba(0, 0, 0, 0.05);
}

/* Progress Bar */
.progress-bar {
    width: 100%;
    height: 10px;
    background: #e9ecef;
    border-radius: 5px;
    margin-top: 10px;
    position: relative;
    overflow: hidden;
}
.progress-bar #progress-fill {
    height: 100%;
    background: #28a745;
    transition: width 0.5s ease-in-out;
}
</style>
