// Hàm kiểm tra tính hợp lệ của dữ liệu cho nhập và sửa đối tượng nhà cung cấp
function validateDataSupplier() {
  let codeSupplier = document.getElementById("supplierCode").value.trim();
  let nameSupplier = document.getElementById("nameSupplier").value.trim();
  let address = document.getElementById("address").value.trim();
  let email = document.getElementById("email").value.trim();
  let brandSupplier = document.getElementById("brandSupplier").value.trim();
  let phoneNumber = document.getElementById("phoneNumber").value.trim();

  // Kiểm tra tính hợp lệ của các trường nhập liệu
  if (
    codeSupplier === "" ||
    nameSupplier === "" ||
    address === "" ||
    email === "" ||
    brandSupplier === "" ||
    phoneNumber === ""
  ) {
    Swal.fire({
      icon: "error",
      title: "Vui lòng nhập đầy đủ thông tin",
      text: "Các trường không được để trống",
      footer: '<a href="#"></a>',
    });
    return false;
  }

  // Kiểm tra định dạng email
  let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    Swal.fire({
      icon: "error",
      title: "Định dạng email không hợp lệ",
      text: "Vui lòng nhập đúng định dạng email",
      footer: '<a href="#"></a>',
    });
    return false;
  }

  // Kiểm tra định dạng số điện thoại
  let phonePattern = /^\d{10,}$/;
  if (!phonePattern.test(phoneNumber)) {
    Swal.fire({
      icon: "error",
      title: "Số điện thoại không hợp lệ",
      text: "Vui lòng nhập số điện thoại có ít nhất 10 chữ số",
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

  // Kiểm tra tính hợp lệ của dữ liệu trước khi thêm
  if (!validateDataSupplier()) {
    return; // Nếu dữ liệu không hợp lệ, dừng và không thực hiện thêm đối tượng
  }
  try {
    let codeSupplier = document.getElementById("supplierCode").value.trim();
    let nameSupplier = document.getElementById("nameSupplier").value.trim();
    let address = document.getElementById("address").value.trim();
    let email = document.getElementById("email").value.trim();
    let brandSupplier = document.getElementById("brandSupplier").value.trim();
    let phoneNumber = document.getElementById("phoneNumber").value.trim();
    let response = await fetch("../../../BLL/SupplierBLL.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body:
        "function=" +
        encodeURIComponent("addObj") +
        "&codeSupplier=" +
        encodeURIComponent(codeSupplier) +
        "&nameSupplier=" +
        encodeURIComponent(nameSupplier) +
        "&address=" +
        encodeURIComponent(address) +
        "&email=" +
        encodeURIComponent(email) +
        "&brandSupplier=" +
        encodeURIComponent(brandSupplier) +
        "&phoneNumber=" +
        encodeURIComponent(phoneNumber),
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
