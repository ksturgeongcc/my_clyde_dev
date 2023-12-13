<?php 
    include '../../partials/header.php'; 
    include '../../config/config.php'; 
    include '../../queries/student.php'; 
    include '../../queries/courseQuery.php'; 

?>
<!-- component -->
<div class="flex flex-col">
  <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="bg-gray-200 border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Unit Name
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Unit Description
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Status
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Enrolment Date
              </th>
            </tr>
          </thead>
          <tbody>
          <?php while ($course->fetch()): ?>
            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?= $unitName ?></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?= $unitDesc ?>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                Current
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?= $enrolDate ?>
              </td>
            </tr>
            <?php endwhile ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php include '../../partials/footer.php'; ?>
