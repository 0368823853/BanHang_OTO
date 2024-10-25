function showSection(sectionId) {
    // Ẩn tất cả các phần
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    // Hiển thị phần được chọn
    const selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
}


function refreshPage() {
    // Làm mới trang
    location.reload();
}


// Quản lý người dùng - Mảng để lưu trữ danh sách người dùng
let userList = [];

// Hàm để thêm người dùng mới
function addUser() {
    // Lấy giá trị từ các trường nhập
    let username = document.getElementById('username').value;
    let usertype = document.getElementById('usertype').value;

    // Tạo đối tượng người dùng mới
    let user = {
        username: username,
        usertype: usertype
    };

    // Thêm người dùng vào mảng
    userList.push(user);

    // Hiển thị danh sách người dùng
    displayUserList();

    // Đặt lại giá trị trường nhập
    document.getElementById('username').value = '';
    document.getElementById('usertype').value = 'Khách hàng';
}

// Hàm để hiển thị danh sách người dùng
function displayUserList() {
    let userListElement = document.getElementById('userList');

    // Xóa nội dung cũ trong danh sách
    userListElement.innerHTML = '';

    // Duyệt qua mảng người dùng và thêm vào danh sách HTML
    userList.forEach(function (user) {
        let listItem = document.createElement('li');
        listItem.textContent = `Tên người dùng: ${user.username}, Loại người dùng: ${user.usertype}`;
        userListElement.appendChild(listItem);
    });
}


// Quản lý Dịch Vụ và Bảo Dưỡng - Mảng để lưu trữ danh sách dịch vụ và bảo dưỡng
let serviceList = [];

// Hàm để thêm dịch vụ mới
function addService() {
    // Lấy giá trị từ các trường nhập
    let serviceName = document.getElementById('serviceName').value;
    let serviceType = document.getElementById('serviceType').value;

    // Tạo đối tượng dịch vụ mới
    let service = {
        serviceName: serviceName,
        serviceType: serviceType
    };

    // Thêm dịch vụ vào mảng
    serviceList.push(service);

    // Hiển thị danh sách dịch vụ
    displayServiceList();

    // Đặt lại giá trị trường nhập
    document.getElementById('serviceName').value = '';
    document.getElementById('serviceType').value = 'Bảo dưỡng'; // Đặt lại giá trị mặc định nếu cần
}

// Hàm để hiển thị danh sách dịch vụ
function displayServiceList() {
    let serviceListElement = document.getElementById('serviceList');

    // Xóa nội dung cũ trong danh sách
    serviceListElement.innerHTML = '';

    // Duyệt qua mảng dịch vụ và thêm vào danh sách HTML
    serviceList.forEach(function (service) {
        let listItem = document.createElement('li');
        listItem.textContent = `Tên Dịch Vụ: ${service.serviceName}, Loại Dịch Vụ: ${service.serviceType}`;
        serviceListElement.appendChild(listItem);
    });
}


// Quản lý Xe Ô Tô
function showSection(sectionId) {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    const selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
}

function refreshPage() {
    location.reload();
}

function addCar() {
    const carList = document.getElementById('carList');
    const carName = document.getElementById('carName').value;
    const carDescription = document.getElementById('carDescription').value;

    if (carName && carDescription) {
        const li = document.createElement('li');
        li.innerHTML = `<strong>${carName}</strong>: ${carDescription}`;
        carList.appendChild(li);

        // Xóa các trường nhập
        document.getElementById('carName').value = '';
        document.getElementById('carDescription').value = '';
    } else {
        alert('Vui lòng nhập cả tên xe và mô tả');
    }
}


// Quản lý Nhân Viên - Dữ liệu giả mạo cho nhân viên
let employees = [];

// Hàm để thêm một nhân viên mới
function addEmployee() {
    const name = document.getElementById("employeeName").value;
    const role = document.getElementById("employeeRole").value;

    // Thêm nhân viên vào danh sách
    employees.push({ name, role });

    // Cập nhật danh sách nhân viên
    updateEmployeeList();

    // Xóa mẫu nhập
    document.getElementById("employeeForm").reset();
}

// Hàm để cập nhật danh sách nhân viên
function updateEmployeeList() {
    const employeeList = document.getElementById("employeeList");
    employeeList.innerHTML = "";

    // Lặp qua danh sách nhân viên và hiển thị chúng
    employees.forEach(employee => {
        const listItem = document.createElement("li");
        listItem.textContent = `${employee.name} - ${employee.role}`;
        employeeList.appendChild(listItem);
    });
}


// Quản lý Kho và Vật Tư
let inventory = [];
let totalInventory = 0;

function updateInventory() {
    const itemName = document.getElementById("itemName").value;
    const itemQuantity = parseInt(document.getElementById("itemQuantity").value);
    const itemAction = document.getElementById("itemAction").value;

    if (itemAction === "import") {
        inventory.push({ itemName, quantity: itemQuantity, action: "Nhập" });
        totalInventory += itemQuantity;
    } else if (itemAction === "export") {
        if (itemQuantity <= totalInventory) {
            inventory.push({ itemName, quantity: itemQuantity, action: "Xuất" });
            totalInventory -= itemQuantity;
        } else {
            alert("Không đủ hàng trong kho!");
        }
    }

    updateInventorySummary();
    updateInventoryHistory();
}

function updateInventorySummary() {
    document.getElementById("totalInventory").textContent = totalInventory;
}

function updateInventoryHistory() {
    const inventoryHistory = document.getElementById("inventoryHistory");
    const latestAction = inventory[inventory.length - 1];

    const listItem = document.createElement("li");
    listItem.textContent = `${latestAction.action} ${latestAction.quantity} ${latestAction.itemName}`;
    inventoryHistory.appendChild(listItem);
}


// Báo Cáo và Thống Kê
function generateReport() {
    // Quản lý Người Dùng
    var userList = document.getElementById("userList").getElementsByTagName("li").length;

    // Quản lý Dịch Vụ và Bảo Dưỡng
    var serviceList = document.getElementById("serviceList").getElementsByTagName("li").length;

    // Quản lý Xe Ô Tô
    var carList = document.getElementById("carList").getElementsByTagName("li").length;

    // Quản lý Nhân Viên
    var employeeList = document.getElementById("employeeList").getElementsByTagName("li").length;

    // Quản lý Kho và Vật Tư
    var inventoryList = document.getElementById("inventoryHistory").getElementsByTagName("li").length;

    // Hiển thị kết quả báo cáo
    var reportResult = "Báo Cáo và Thống Kê\n\n";
    reportResult += "Quản lý Người Dùng: " + userList + " người dùng\n";
    reportResult += "Quản lý Dịch Vụ và Bảo Dưỡng: " + serviceList + " dịch vụ\n";
    reportResult += "Quản lý Xe Ô Tô: " + carList + " xe ô tô\n";
    reportResult += "Quản lý Nhân Viên: " + employeeList + " nhân viên\n";
    reportResult += "Quản lý Kho và Vật Tư: " + inventoryList + " mục trong kho\n";

    // Hiển thị kết quả lên màn hình hoặc thực hiện các thao tác khác theo yêu cầu của bạn
    alert(reportResult);
}

function generateReport() {
    var userCount = document.getElementById("userList").getElementsByTagName("li").length;
    var serviceCount = document.getElementById("serviceList").getElementsByTagName("li").length;
    var carCount = document.getElementById("carList").getElementsByTagName("li").length;
    var employeeCount = document.getElementById("employeeList").getElementsByTagName("li").length;
    var inventoryCount = document.getElementById("inventoryHistory").getElementsByTagName("li").length;

    // Dữ liệu cho biểu đồ
    var data = {
        labels: ['Người Dùng', 'Dịch Vụ', 'Xe Ô Tô', 'Nhân Viên', 'Kho và Vật Tư'],
        datasets: [{
            label: 'Số lượng',
            data: [userCount, serviceCount, carCount, employeeCount, inventoryCount],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Cấu hình biểu đồ
    var options = {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    };

    // Lấy phần tử canvas từ HTML
    var ctx = document.getElementById('reportChart').getContext('2d');

    // Tạo biểu đồ cột
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });

    // Hiển thị biểu đồ trên màn hình
    document.getElementById('chartContainer').style.display = 'block';
}


// Hệ Thống Thông Báo và Gửi Email
function sendNotification() {
    // Thực hiện các công việc thông báo ở đây (ví dụ: thông báo trên giao diện)
    const notificationResult = document.getElementById('notificationResult');
    notificationResult.innerHTML = 'Thông báo đã được gửi thành công.';

    // Gửi email bằng dịch vụ EmailJS (hoặc dịch vụ gửi email khác)
    // Lưu ý: Bạn cần cấu hình các thông tin tài khoản của mình để sử dụng EmailJS
    emailjs.send("service_id", "template_id", {
        to_email: "receiver@example.com",
        message: "Nội dung email của bạn ở đây."
    }).then(
        function (response) {
            console.log("Email đã được gửi thành công", response);
            notificationResult.innerHTML += '<br>Email đã được gửi thành công.';
        },
        function (error) {
            console.log("Lỗi khi gửi email", error);
            notificationResult.innerHTML += '<br>Có lỗi khi gửi email.';
        }
    );
}


// Quản lý Tài Khoản và Bảo Mật - Đối tượng lưu trữ thông tin tài khoản (giả định)
let account = {
    username: "JohnDoe",
    email: "johndoe@example.com",
    password: "securePassword" // Đây chỉ là ví dụ, bạn cần lưu trữ mật khẩu an toàn hơn
};

function showUpdateForm() {
    // Hiển thị biểu mẫu cập nhật thông tin
    const updateForm = document.getElementById("updateForm");
    updateForm.style.display = "block";
}

function updateAccount() {
    // Cập nhật thông tin tài khoản (giả định)
    const newUsername = document.getElementById("newUsername").value;
    const newEmail = document.getElementById("newEmail").value;
    const newPassword = document.getElementById("newPassword").value;

    // Kiểm tra và cập nhật thông tin mới
    if (newUsername) {
        account.username = newUsername;
    }
    if (newEmail) {
        account.email = newEmail;
    }
    if (newPassword) {
        account.password = newPassword;
    }

    // Hiển thị thông tin tài khoản mới
    displayAccountInfo();

    // Ẩn biểu mẫu cập nhật
    const updateForm = document.getElementById("updateForm");
    updateForm.style.display = "none";
}

function displayAccountInfo() {
    // Hiển thị thông tin tài khoản mới
    document.getElementById("username").innerText = account.username;
    document.getElementById("email").innerText = account.email;
}

function changePassword() {
    const currentPassword = document.getElementById("currentPassword").value;
    const newPassword = document.getElementById("newPassword").value;
    const confirmNewPassword = document.getElementById("confirmNewPassword").value;

    // Kiểm tra mật khẩu hiện tại
    if (currentPassword !== account.password) {
        alert("Mật khẩu hiện tại không đúng");
        return;
    }

    // Kiểm tra mật khẩu mới và xác nhận
    if (newPassword !== confirmNewPassword) {
        alert("Mật khẩu mới không khớp");
        return;
    }

    // Cập nhật mật khẩu mới
    account.password = newPassword;

    // Hiển thị thông báo thành công (bạn có thể thực hiện gửi thông báo khác)
    alert("Thay đổi mật khẩu thành công");
}

// Hiển thị thông tin tài khoản khi trang web được tải
displayAccountInfo();