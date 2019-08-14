<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link" href="<?php echo e($url); ?>/1" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <?php for($i = 1; $i < $total; $i++): ?>
            <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>/<?php echo e($i); ?>"><?php echo e($i); ?></a></li>
        <?php endfor; ?>
        <li class="page-item">
            <a class="page-link" href="<?php echo e($url); ?>/<?php echo e($total); ?>" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>
