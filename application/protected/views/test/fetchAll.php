
<div style="padding-left: 10px;">
    <?php while($r = each($results)): ?>
    <div>
        <h3>
            <?php echo $r['value']['name'] . ' => ' . $r['value']['age'] . ' => ' . $r['value']['city']; ?>
        </h3>
        
    </div>
    <hr>
    <?php endwhile; ?>
</div>