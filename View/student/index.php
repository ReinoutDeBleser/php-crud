
<?php require_once './View/includes/header.php'; ?>

<div class="flex flex-col max-w-screen-2xl mx-auto my-12">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="my-8 flex justify-between h-20">
            <h1 class="self-center text-2xl text-gray-900 font-light">
              <?php if(isset($_GET['q'])) { echo "Search result for <b>" . $_GET['q'] . "</b>"; } else { echo "All Students"; } ?>

            </h1>
            <form class="self-center" method="get" action="">
                <input type="hidden" name="view" value="search">
                <input type="text"
                       class="px-6 h-10 border border-gray-300 w-40 md:w-72 outline:none focus:outline-none focus:border-purple-600"
                       placeholder="search"
                       name="q"
                       value="<?php if(isset($_GET['q'])) { echo $_GET['q']; } ?>"
                >
                <input
                        type="submit"
                        class="h-10 px-4 bg-purple-600 hover:bg-purple-700 text-white border border-purple 800 cursor-pointer"
                >
            </form>
            <a class="self-center" href="student.php?view=create">
            <button class="px-8 h-10 bg-purple-600 hover:bg-purple-700 border border-purple-800 text-white rounded-full">Add</button>
            </a>
        </div>
      <div class="shadow overflow-hidden border-b border-gray-300 sm:rounded-lg">
        <table class="min-w-full disvide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium font-bold text-gray-700 uppercase tracking-wider">
Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium  text-gray-700 uppercase tracking-wider">
Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
Phone
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">
Class
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

          <?php foreach($students as $student): ?>

            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
<!--                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">-->
                      <img class="h-10 w-10 rounded-full" src="./assets/images/default-profile-small.jpg" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                        <?php echo $student['firstname']; ?> <?php echo $student['lastname']; ?>
                    </div>
                    <div class="text-sm text-gray-500">
    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900"><?php echo $student['email']; ?></div>
<!--                <div class="text-sm text-gray-500">Optimization</div>-->

              </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <?php echo $student['phone']; ?></div>
                </td>
              <td class="px-6 py-4 whitespace-nowrap">
                  <?php  if ($student['classroom_id'] != null) {  ?>

                  <a href="./classroom.php?view=classroom&id=<?php echo $student['classroom']['id']; ?>">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 hover:bg-green-200 text-green-800">
                    <?php echo $student['classroom']['name']; ?>
                </span>
                </a> <?php } else  {?>
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full text-green-800">
                    No Class Assigned
                  </span>

                  <?php }?>
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                  <a href="./?view=update&id=<?php echo $student['id']; ?>">
                      <button class="h-10 text-xm px-3 mx-2 inline-block bg-blue-500 hover:bg-blue-600 border border-blue-700 rounded-full text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                          </svg>
                      </button>
                  </a>

                  <a href="./?view=student&id=<?php echo $student['id']; ?>">
                      <button class="h-10 text-xm px-3 mx-2 inline-block bg-green-500 hover:bg-green-600 border border-green-700 rounded-full text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg>
                      </button>
                  </a>
                  <a href="./?view=delete&id=<?php echo $student['id']; ?>">
                      <button class="h-10 text-xm px-3 mx-2 inline-block bg-red-700 hover:bg-red-800 border border-red-900 rounded-full text-white">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                          </svg>
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

<?php require_once './View/includes/footer.php'; ?>