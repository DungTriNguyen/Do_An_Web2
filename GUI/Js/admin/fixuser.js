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
  codePermissions,
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
  let codePermissionsValue = document.getElementById(codePermissions).value;
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
        "&userName=" +
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
        encodeURIComponent(codePermissionsValue),
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
    } else {
      Swal.fire({
        icon: "error",
        title: "Không cho phép sửa",
        text: "Bị trùng dữ liệu",
        footer: '<a href="#"></a>',
      });
    }
  } catch (error) {
    console.error(error);
  }
}
