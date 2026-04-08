<?php 
    require __DIR__.'/inc/functions.inc.php';
    $city = null;
    if(!empty($_GET['city'])){
        $city = $_GET['city'];
    }

    $filename = null;
    if(!empty($city)) {
        $cities = json_decode(file_get_contents(__DIR__.'/../data/index.json'), true);
        foreach($cities AS $currentCity) {
            if($currentCity['city'] === $city) {
                $filename = $currentCity['filename'];
                break;
            }
        }
    }
    if(!empty($filename)) {
        $results = json_decode(file_get_contents('compress.bzip2://'.__DIR__.'/../data/'.$filename), true)['results'];
        $stats = [];
        foreach($results AS $result) {
            if($result['parameter'] !== 'pm25' && $result['parameter'] !== 'pm10') continue;

            $month = substr($result['date']['local'], 0, 7);
            if(!isset($stats[$month])) {
                $stats[$month] = [
                    'pm25' => [],
                    'pm10' => []
                ];
            }
            if($result['value'] < 0) continue;
            $stats[$month][$result['parameter']][] = $result['value'];
            // var_dump($month);
            // break;
        }
        // var_dump($stats);
    }

?>

<?php require __DIR__.'/views/header.inc.php'; ?>
<?php if(empty($city)): ?>
    <p>The city could not be loaded.</p>
<?php else: ?>
    <?php if(!empty($stats)): ?>
        <table>
            <thead>
                <tr>
                    <th>Month</th>
                    <th>PM 2.5 concentration</th>
                    <th>PM 10 concentration</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($stats AS $month => $measurement): ?>
                    <tr>
                        <th><?php echo e($month); ?></th>
                        <td><?php echo e(array_sum($measurement['pm25']) / count($measurement['pm25'])); ?></td>
                        <td><?php echo e(array_sum($measurement['pm10']) / count($measurement['pm10'])); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php endif; ?>




<?php require __DIR__.'/views/footer.inc.php'; ?>