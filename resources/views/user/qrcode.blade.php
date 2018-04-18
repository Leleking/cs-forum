<?php
$png = QrCode::format('png')->size(520)->generate($booked->token);
$png = base64_encode($png);
echo "<img src='data:image/png;base64," . $png . "'>";
?>