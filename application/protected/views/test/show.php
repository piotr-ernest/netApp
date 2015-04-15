
<div style="padding: 10px;">
    <?php while ($u = $users->read()): ?>

        <div>
            <p>
                <?php echo $u['name'] . ' - wiek: ' . $u['age'] . ' miasto: ' . $u['city'];  ?>
            </p>
        </div>
        <hr>
    <?php endwhile; ?>

</div>
