<table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          id_role
                      </th>
                      <th>
                          name_role
                      </th>
                     <th>
                          action
                      </th>
                  </tr>
              </thead>
              <tbody>
               <?php 
                  $mangRole=$data['role'];
                ?>
                 <?php foreach ($mangRole as $role) {
                 ?>
                  <tr>
                      <td>
                          <?php echo $role['id_role']; ?>
                      </td>
                      <td>
                         <?php echo $role['role_name']; ?>
                      </td>
                      <td class="project-actions text-left">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>