//Kiểm tra dữ liệu đầu vào
function validateDataUserGroup() {
  let codePermissionValue = document
    .getElementById("codePermission")
    .value.trim();
  let namePermissionValue = document
    .getElementById("namePermission")
    .value.trim();

  // Kiểm tra tính hợp lệ của các trường nhập liệu
  if (codePermissionValue.trim() === "" || namePermissionValue.trim() === "") {
    Swal.fire({
      icon: "error",
      title: "Thông tin không được để trống",
      text: "Vui lòng điền đầy đủ thông tin",
      footer: '<a href="#"></a>',
    });
    return false;
  }
  // Nếu dữ liệu hợp lệ, trả về true
  return true;
}

//Thêm đối tượng
async function addObj(event) {
  event.preventDefault();
  try {
    let codePermission = document.getElementById("codePermission").value.trim();
    let namePermission = document.getElementById("namePermission").value.trim();

    let response = await fetch("../../../BLL/ManagerUserGroupBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("addObj") +
        "&codePermission=" +
        encodeURIComponent(codePermission) +
        "&namePermission=" +
        encodeURIComponent(namePermission),
    });

    let data = await response.json();
    console.log(data);
    if (data.mess === "success") {
      Swal.fire({
        title: "Thêm thành công!",
        width: 600,
        padding: "3em",
        color: "#716add",
        background: "#fff url(../../image/trees.png)",
        backdrop: `
        rgba(0,0,123,0.4)
        url("../../image/nyan-cat.gif")
        left top
        no-repeat
        
      `,
      });
    } else {
      Swal.fire({
        icon: "error",
        title: "Thêm không thành công",
        text: "Bị trùng dữ liệu",
        footer: '<a href="#"></a>',
      });
    }
  } catch (error) {
    console.error(error);
  }
}
