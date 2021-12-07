<?php
    require './View/includes/header.php';
?>

<div class="flex flex-col max-w-screen-2xl mx-auto my-12">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Phone
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
Class
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

          <?php foreach($teachers as $teacher): ?>

            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                        <?php echo $teacher['id']; ?>: <?php echo $teacher['firstname']; ?> <?php echo $teacher['lastname']; ?>
                    </div>
                    <div class="text-sm text-gray-500">
    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $teacher['email']; ?></div>
<!--                <div class="text-sm text-gray-500">Optimization</div>-->

              </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <?php echo $teacher['phone']; ?></div>
                </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                    <?php echo $teacher['classroom']; ?></div>
                </span>
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <a href="teacher.php?view=update&id=<?php echo $teacher['id']; ?>">
                      <button class="h-8 text-xm px-3 mx-2 inline-block bg-red-500 text-white">
                          Update
                      </button>
                  </a>

                  <a href="teacher.php?view=teacher&id=<?php echo $teacher['id']; ?>">
                      <button class="h-8 text-xm px-3 mx-2 inline-block bg-red-500 text-white">
                          View
                      </button>
                  </a>
                  <a href="teacher.php?view=delete&id=<?php echo $teacher['id']; ?>">
                      <button class="h-8 text-xm px-3 mx-2 inline-block bg-red-500 text-white">
                          Delete
                      </button>
                  </a>

              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<form method="post">
    <?php foreach ($teachers AS $i => $teacher): ?>
        <?php echo $teacher['firstname'] ?>          

        <input type="text" name="updateTeacher">
        <button type="submit" name="update">Update</buttonn>
        <button type="submit" name="delete">delete</button><br>
    <?php endforeach; ?>
    

</form>
<?php
require './View/includes/footer.php';
?>


