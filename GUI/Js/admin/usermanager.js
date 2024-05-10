//Lấy danh sách đối tượng
async function getListObj() {
  try {
    // Gọi AJAX để xóa payment

    let response = await fetch("../../../BLL/UserManagerBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "function=" + encodeURIComponent("getList"),
    });
    let data = await response.json();
    console.log(data);
    await loadData(data);
    // await loadPermissions(data);
    await getListObjPermission();
  } catch (error) {
    console.error(error);
  }
}

//lấy dữ liệu từ kết quả  rearch
function searchAccount() {
  document.getElementById("input-search-account").oninput = async function () {
    try {
      // Gọi AJAX để xóa payment
      let str = document.getElementById("input-search-account").value;
      let response = await fetch("../../../BLL/UserManagerBLL.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "function=" +
          encodeURIComponent("searchAccount") +
          "&str=" +
          encodeURIComponent(str),
      });

      let data = await response.json();
      console.log(data);
      loadData(data);
    } catch (error) {
      console.error(error);
    }
  };
}
async function getListObjPermission() {
  try {
    // Gọi AJAX để xóa payment

    let response = await fetch("../../../BLL/ManagerUserGroupBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: "function=" + encodeURIComponent("getList"),
    });

    let data = await response.json();
    console.log(data);
    await loadPermissions(data);
  } catch (error) {
    console.error(error);
  }
}
async function loadPermissions(data) {
  let selectPermissions = document.getElementById("codePermissions");
  let options = "";
  for (let permission of data) {
    options += `<option value="${permission.codePermission}">${permission.namePermission}</option>`;
  }
  selectPermissions.innerHTML = options;
}
async function loadData(data) {
  let container = document.getElementById("danhsachUser");
  let container1 = document.getElementById("delete-User");
  let container2 = document.getElementById("edit-User");
  let result = ``;
  let result1 = ``;
  let result2 = ``;
  let stt = 1;
  //Check trạng thái
  let strStt = "";

  for (let i of data) {
    let username = i.username;
    let passWord = i.passWord;
    let dateCreated = i.dateCreated;
    let accountStatus = i.accountStatus;
    let name = i.name;
    let email = i.email;
    let phoneNumber = i.phoneNumber;
    let birth = i.birth;
    let sex = i.sex;
    let codePermission = i.codePermission;
    if (i.accountStatus == "1") {
      strStt = `<td><a class="btn btn-primary fa fa-eye" title="" onclick="updateState('${i.username}','${i.accountStatus}',event)"> kích hoạt</a> </td>`;
    } else {
      strStt = `<td><a class="btn btn-danger fa fa-eye-slash" title="" onclick="updateState('${i.username}','${i.accountStatus}',event)"> chưa kích hoạt</a></td>`;
    }

    let String = `
    <tr>
       <td>${stt}</td>
       <td>${username}</td>
       <td>${name}</td>
       <td>${email}</td>
       <td>${phoneNumber}</td>
       ${strStt}
       <td><a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editUser-${i.username}"><i class="fa fa-edit"> Sửa</i></a></td>
       <td><a href="#" class="delete-button" data-bs-toggle="modal" data-bs-target="#deleteUser-${i.username}"><i class="fa fa-trash"></i>Xóa</a></td>
    </tr>
          
      `;
    let String1 = `
    <div class="modal fade" id="deleteUser-${i.username}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Xóa người dùng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có chắc muốn xóa người dùng này?
                <br>
                Mã người dùng: ${i.username}
                <br>
                Tên người dùng: ${i.name}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" data-bs-dismiss="modal" class="btn btn-danger btn-confirm-delete" onclick="deleteByID('${i.username}')">Xóa</button>
            </div>
        </div>
    </div>
</div>

      `;
    let String2 = `
    <div class="modal fade" id="editUser-${i.username}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Sửa nhà cung cấp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="${i.username}" value="${i.username}" name="username" placeholder="NCC001" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Mật Khẩu</label>
                            <input type="text" class="form-control" id="${i.username}-${i.passWord}" value="${i.passWord}" name="passWord">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Nhập lại mật khẩu:</label>
                            <input type="text" class="form-control" id="${i.username}-${i.passWord}" value="${i.passWord}" name="passWord">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Họ và tên:</label>
                            <input type="text" class="form-control" id="${i.username}-${i.name}" value="${i.name}" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="${i.username}-${i.email}" value="${i.email}" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Số điện thoại</label>
                            <input class="form-control" id="${i.username}-${i.phoneNumber}" value="${i.phoneNumber}" name="phoneNumber">
                        </div>
                        <div class="mb-3">
                            <label for="brandsuppliers" class="form-label">Địa chỉ:</label>
                            <input type="text" class="form-control" id="${i.username}-${i.address}" value="${i.address}" name="address">
                        </div>
                        <div class="mb-3">
                            <label for="brandsuppliers" class="form-label">Ngày sinh:</label>
                            <input type="date" class="form-control" id="${i.username}-${i.birth}" value="${i.birth}" name="birth">
                        </div>
                        <div class="mb-3">
                            <label for="brandsuppliers" class="form-label">Giới tính</label>
                            <input type="text" class="form-control" id="${i.username}-${i.sex}" value="${i.sex}" name="sex">
                        </div>
                        <div class="mb-3">
                            <label for="brandsuppliers" class="form-label">Nhóm người dùng:</label>        
                            <option class="form-control" value="${i.username}-${i.codePermission}">${i.namePermission}</option>
                        </div>
                        <div class="mb-3">
                            <label for="brandsuppliers" class="form-label">Trạng thái</label>
                            <input type="text" class="form-control" id="${i.username}-${i.accountStatus}" value="${i.accountStatus}" name="accountStatus">
                        </div>
                        <div style="text-align:right;">
                            <button type="submit" data-bs-dismiss="modal" class="btn btn-primary" onclick="updateObj('${i.username}', '${i.username}-${i.passWord}', '${i.username}-${i.name}', '${i.username}-${i.email}','${i.username}-${i.phoneNumber}','${i.username}-${i.address}','${i.username}-${i.birth}', '${i.username}-${i.sex}','${i.username}-${i.codePermission}','${i.username}-${i.accountStatus}',event)" >Sửa nhà cung cấp</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
      `;
    // <input type="text" class="form-control" id="${i.username}-${i.codePermission}" value="${i.codePermission}" name="codePermission">
    // console.log(String);
    result += String;
    result1 += String1;
    result2 += String2;
    stt++;
  }
  // console.log(result);
  container.innerHTML = result;
  container1.innerHTML = result1;
  // console.log(result1);
  container2.innerHTML = result2;
  // console.log(result2);
}

// Lấy một đối tượng bằng id
async function getObj() {
  try {
    // Gọi AJAX để xóa payment

    let response = await fetch("../../../BLL/UserManagerBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("getObj") +
        "&username=" +
        encodeURIComponent(obj.username),
    });

    let data = await response.json();
    console.log(data);
  } catch (error) {
    console.error(error);
  }
}

//Xóa một đối tượng
async function deleteByID(code) {
  try {
    // Gọi AJAX để xóa payment

    let response = await fetch("../../../BLL/UserManagerBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("deleteByID") +
        "&username=" +
        encodeURIComponent(code),
    });
    let data = await response.json();
    console.log(data);

    if (data.mess === "success") {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Đã xóa tài khoản người dùng thành công",
        showConfirmButton: false,
        timer: 1500,
      });
      await getListObj();
    } else {
      Swal.fire({
        icon: "error",
        title: "Không cho phép xóa",
        text: "Bị ràng buộc dữ liệu",
        footer: '<a href="#"></a>',
      });
    }
  } catch (error) {
    console.error(error);
  }
}

//Sửa một đối tượng
async function updateObj(
  username,
  passWord,
  dateCreated,
  accountStatus,
  name,
  address,
  email,
  phoneNumber,
  birth,
  sex,
  codePermission,
  event
) {
  event.preventDefault();

  let usernameValue = document.getElementById(username).value;
  let passWordrValue = document.getElementById(passWord).value;
  let dateCreatedValue = document.getElementById(dateCreated).value;
  let accountStatusValue = document.getElementById(accountStatus).value;
  let nameValue = document.getElementById(name).value;
  let addressValue = document.getElementById(address).value;
  let emailValue = document.getElementById(email).value;
  let phoneNumberValue = document.getElementById(phoneNumber).value;
  let birthValue = document.getElementById(birth).value;
  let sexValue = document.getElementById(sex).value;
  let codePermissionValue = document.getElementById(codePermission).value;
  console.log(usernameValue);
  console.log(passWordrValue);

  try {
    // Gọi AJAX để sửa đối tượng
    let response = await fetch("../../../BLL/UserManagerBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("updateObj") +
        "&username=" +
        encodeURIComponent(usernameValue) +
        "&passWord=" +
        encodeURIComponent(passWordrValue) +
        "&dateCreate=" +
        encodeURIComponent(dateCreatedValue) +
        "&accountStatus=" +
        encodeURIComponent(accountStatusValue) +
        "&name=" +
        encodeURIComponent(nameValue) +
        "&address=" +
        encodeURIComponent(addressValue) +
        "&email=" +
        encodeURIComponent(emailValue) +
        "&phoneNumber=" +
        encodeURIComponent(phoneNumberValue) +
        "&birth=" +
        encodeURIComponent(birthValue) +
        "&sex=" +
        encodeURIComponent(sexValue) +
        "&codePermission=" +
        encodeURIComponent(codePermissionValue),
    });
    let data = await response.json();
    console.log(data);
    if (data.mess === "success") {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Sửa thông tin người dùng thành công",
        showConfirmButton: false,
        timer: 1500,
      });
      await getListObj();
    }
  } catch (error) {
    console.error(error);
  }
}

//Hàm thay đổi trạng thái
async function updateState(username, accountStatus, event) {
  event.preventDefault();

  try {
    const response = await fetch("../../../BLL/UserManagerBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("updateStateObj") +
        "&username=" +
        encodeURIComponent(username) +
        "&accountStatus=" +
        encodeURIComponent(accountStatus),
    });

    const data = await response.json();
    console.log(data);

    if (data.mess === "success") {
      Swal.fire({
        position: "center",
        icon: "success",
        title: "Thay đổi trạng thái thành công",
        showConfirmButton: false,
        timer: 1500,
      });
      await getListObj();
    }
  } catch (error) {
    console.error("Error:", error);
  }
}

window.addEventListener("load", async function () {
  // Thực hiện các hàm bạn muốn sau khi trang web đã tải hoàn toàn, bao gồm tất cả các tài nguyên như hình ảnh, stylesheet, v.v.
  console.log("Trang quản lý người dùng đã load hoàn toàn");
  await getListObj();
  await getListObjPermission();
  searchAccount();
});
