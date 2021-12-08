<?php require_once './View/includes/header.php'; ?>

<div class="w-full max-w-screen-sm mx-auto my-12">
    <div class="w-full h-96 mx-4 my-4 px-6 py-6 border border-gray-300 shadow-xl">
        Class overview:<br>
        <?php echo $classroom[0]['name']; ?>
        <?php echo $classroom[0]['location'];?>
        <?php echo $classroom[0]['teacher'];?>

        <br><br>
        Enrolled students:<br>
        <?php
        foreach ($students as $student)
        {
            echo '<tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                      <img class="h-10 w-10 rounded-full" src="../../assets/images/default-profile-small.jpg" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">';
            echo $student['firstname']; ?> <?php echo $student['lastname'];
    '</div>
    <div class="text-sm text-gray-500">
    </div>
</div>
</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
    <div class="text-sm text-gray-900">' echo $student['email'];'</div>

</td>
<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">';
    echo $student['phone'];'</div>
</td>
<td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    '; echo $student['classroom']['name']; '</div>
                </span>
</td>';

        }



        //here i want to add all enrolled students. need to get these from sushanta using classroom as a checker?
        ?>
    </div>
</div>