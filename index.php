<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

            <?php foreach ($hotels as $curHotel) { ?>
                    <article>
                        <h2>
                            <?php echo $curHotel['name']; ?>
                        </h2>
                        <p>Description: <?php echo $curHotel['description']; ?></p>
                        
                        <p> Parking: 
                        <?php if ($curHotel['parking']) { ?>
                            <span>Yes</span>
                        <?php } else { ?>
                            <span>No</span>
                        <?php } ?>
                        </p>

                        <p>Rating: <?php echo $curHotel['vote']; ?> / 5</p>
                        <p>Distance from center: <?php echo $curHotel['distance_to_center']; ?> Km</p>
                    </article>
                <?php } ?>

</body>
</html>