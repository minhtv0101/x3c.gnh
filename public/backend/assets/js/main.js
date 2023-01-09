// Sử dụng file này để khai báo các variable, function global
// Email, UserID, domainName đang được khai báo ở script.php
var dateStart ={
    lkh: '2022-12-15', 
    kaizen: '2022-12-16', 
    checkin: '2022-12-17'
}

function getNhomHocVien30D(idUser, urlApi){
    var url = urlApi + "?id=" + idUser;
    $.ajax({
        type: "GET",
        dataType: "json",
        url: url,
        data: idUser,
        complete: function(data){
            // console.log(data.responseJSON[0].nhom);
            var result = urlApi+ "?nhom=" + data.responseJSON[0].nhom;
            // console.log(result);
            return result;
        }
    });
}

    // console.log(user30d);
    // console.log(user);


function getNhomHocVien30dv2(idUser, callback){
    urlApi = domainName + "/30d/api/getDanhSach30DayDangHoc.php";
    var url = urlApi + "?id=" + idUser;
    console.log(url);
    $.ajax({
        type: "GET",
        dataType: "json",
        url: url,
        data: idUser,
        complete: function(data){
            // console.log(data.responseJSON[0].nhom);
            var result = data.responseJSON[0];
                /*date_end: "2022-09-25"
                date_start: "2022-08-24"
                dien_thoai: "0973323090"
                email: "dienn@gnh.edu.vn"
                ho_ten: "Duy Diện"
                id: "14"
                id_danhsach: "854"
                id_hv: "22008024"
                ma_lop: "30d08"
                ma_ten: "22008024-Duy Diện"
                nhom: "N03"
                tinh_trang: "dang_hoc"
                vi_tri: "Mentor"
                */
            callback(result)
        }
    });
}

// //ID các form
// var idForm = 
// {
//     'test': 0,
//     'thangdo': 1,
//     'feedback': 2,
//     'checkin': 3,
//     'mucta': 4,
//     'chuakehoach': 5,
//     'lantoa': 6,
//     'thongtin': 7,
//     'diemdanh': 8,
//     'feedbackmentor': 9,
//     'disc': 10,
//     'camket': 11,
//     'hieuthuong': 12,
//     'hieuthuongv2': 13,
//     'bt3dngay1': 14,
//     'bt3dngay2': 15,
//     'bt3dngay3': 16,
//     'ghinhanloi': 17,
//     'discsale': 18,
// };
// console.log('idForm.disc: ' + idForm.disc);

const dsNganHang = [
    "Sacombank",
    "ABBank-NH TMCP An Binh",
    "ABC-Agricultural Bank of China Limited",
    "ACB-NH TMCP A Chau",
    "ANZ-NH TNHH MTV ANZ Viet Nam",
    "Agribank-NH Nong nghiep va Phat trien Nong thon Viet Nam",
    "BIDC-NH Dau tu va Phat trien Campuchia CN HCM",
    "BIDC-NH Dau tu va Phat trien Campuchia CN Ha Noi",
    "BIDV-NH TMCP Dau tu va Phat trien Viet Nam",
    "BNP-BNP Paribas HCM",
    "BNP-BNP Paribas Ha Noi",
    "BOCHK-Bank of China Hongkong Ltd CN HCM",
    "BOCOM-Bank of Communications",
    "BOI-Bank of India CN HCM",
    "BPCE-BPCE IOM CN TPHCM",
    "BSP-Bank SinoPac CN HCM",
    "BacABank-NH TMCP Bac A",
    "BangkokBank-Bangkok Bank Viet Nam",
    "BaovietBank-NH TMCP Bao Viet",
    "BusanBank-Busan CN HCM",
    "CBBank-NH TM TNHH MTV Xay Dung Viet Nam",
    "CCB-China Construction Bank Corporation",
    "CIMB-NH TNHH MTV CIMB Viet Nam",
    "CUBCL-Cathay United Bank",
    "ChinaTrust-NH TNHH CTBC",
    "CitiBank HCM",
    "Co.opBank-NH Hop Tac Xa Viet Nam",
    "DBS-DBS Bank Ltd",
    "DeutscheBank-Deutsche Bank Viet Nam",
    "Daegu-NH Daegu CN HCM",
    "DongABank-NH TMCP Dong A",
    "E.SunBank-NH TM TNHH E.Sun",
    "EximBank-NH TMCP Xuat Nhap Khau Viet Nam",
    "FCB-First Commercial Bank CN HCM",
    "FCB-First Commercial Bank CN Ha Noi",
    "GPBank-NH TMCP MTV Dau khi Toan Cau",
    "HDBank-NH TMCP Phat trien TP Ho Chi Minh",
    "HSBC-NH TNHH MTV HSBC CN Ha Noi",
    "HSC NH BANGKOK DAI CHUNG TNHH CN HA NOI",
    "HongleongBank-NH TMCP MTV Hongleong Viet Nam",
    "HuaNanBank-Hua Nan Commercial Bank",
    "IBK-NH Cong Nghiep Han Quoc CN HCM",
    "IBK-NH Cong Nghiep Han Quoc CN HN",
    "ICBC-NH Cong Thuong Trung Quoc",
    "IVB-NH TNHH Indovina",
    "JP Morgan Chase NA Bank CN HCM",
    "Keb Hana CN HCM",
    "Keb Hana CN Ha Noi",
    "Kho Bac Nha Nuoc Trung Uong KBNN",
    "KienlongBank-NH TMCP Kien Long",
    "KookminBank",
    "KookminBank CN HCM",
    "LienVietPostBank-NH TMCP Buu Dien Lien Viet",
    "MB-NH TMCP Quan Doi",
    "MBB-Malayan Banking Berhad",
    "MSB-NH TMCP Hang Hai Viet Nam",
    "MUFG-NH MUFG Bank Ltd CN HCM",
    "MUFG-NH MUFG Bank Ltd CN Ha Noi",
    "MayBank Viet Nam",
    "Mega ICBC",
    "Mizuho Bank HA NOI",
    "Mizuho Bank TPHCM",
    "NCB-NH TMCP Quoc Dan",
    "NH TNHH Mot thanh vien HSBC Viet Nam",
    "NHB-Nonghyup Bank CN Ha Noi",
    "NHNN-NH Nha nuoc Viet Nam",
    "NamABank-NH TMCP Nam A",
    "OCB-NH TMCP Phuong Dong",
    "OCBCBank-Overseas Chinese Banking",
    "OceanBank-NH TMCP Dai duong",
    "PGBank-NH TMCP Xang dau Petrolimex",
    "PVcomBank-NH TMCP Dai chung Viet Nam",
    "PublicBank-NH TNHH MTV Public Viet Nam",
    "SCB-NH TMCP Sai Gon",
    "SCSB-The Shanghai Commecrcial Savings CN Dong Nai",
    "SCVN-Standard Chartered Viet Nam",
    "SHB-NH TMCP Sai Gon Ha Noi",
    "SMBC-Sumitomo Mitsui Bank",
    "SaigonBank-NH TMCP Sai Gon Cong Thuong",
    "SeaBank-NH TMCP Dong Nam A",
    "Shinhan-NH TNHH MTV Shinhan Viet Nam",
    "Siam-Siam Commercial Bank",
    "TPBank-NH TMCP Tien Phong",
    "TaipeiFubon-Taipei Fubon Commercial CN Binh Duong",
    "TaipeiFubon-Taipei Fubon Commercial CN HCM",
    "TaipeiFubon-Taipei Fubon Commercial CN Ha Noi",
    "Techcombank-NH TMCP Ky Thuong Viet Nam",
    "UOB-NH TNHH MTV United Overseas CN HCM",
    "UOB-NH TNHH MTV United Overseas Viet Nam",
    "VBSP-NH Chinh Sach Xa Hoi",
    "VDB-NH Phat trien Viet Nam",
    "VIB-NH TMCP Quoc Te Viet Nam",
    "VPBank-NH TMCP Viet Nam Thinh Vuong",
    "VRB-NH Lien Doanh Viet Nga",
    "VietABank-NH TMCP Viet A",
    "VietBank-NH TMCP Viet Nam Thuong Tin",
    "VietCapitalBank-NH TMCP Ban Viet",
    "Vietcombank-NH TMCP Ngoai Thuong Viet Nam",
    "VietinBank-NH TMCP Cong Thuong Viet Nam",
    "WooriBank-NH TMCP MTV Woori Viet Nam"
   ];

// Lưu dữ liệu tạm thời vào biến storageName dành cho surveyJS
function saveResultToLocalStorage(storageName){
    function saveSurveyData(survey) {
      var data = survey.data;
      data.pageNo = survey.currentPageNo;
      window.localStorage.setItem(storageName, JSON.stringify(data));
    }
    survey.onPartialSend.add(function (sender) {
      saveSurveyData(sender);
    });
    survey.onComplete.add(function (sender, options) {
      saveSurveyData(sender);
    });
    survey.sendResultOnPageNext = true;
    var prevData = window.localStorage.getItem(storageName) || null;
    if (prevData) {
      var data = JSON.parse(prevData);
      survey.data = data;
      if (data.pageNo) {
        survey.currentPageNo = data.pageNo;
      }
    }
}

setTimeout(function(){
    window.localStorage.clear();
},1000*60*10); // Tự động Clear Local storeage sau 1p



//==============================funtion redirect to url ================
function redirect(url){
    window.location.href = url;
}
//=====================================================================


// ======================= Validation Form Boostrap =========================
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
        })
    })()
// ======================= End Validation Form  =========================


function renderIcon(e){
    if(e === '0' || e === null){
        return `<div class="font-20 text-success">🔥
                </div>`
    }else{
        return `<div class="font-20 text-success">🍀
                </div>`
    }
};
function renderIcon2(e){
    if(e === '0' || e === null){
        return `<div class="font-20 text-success">🍀
                </div>`
    }else{
        return `<div class="font-20 text-success">🔥
                </div>`
    }
};
function renderImageIcon(e){
    if(e === '0' || e === null){
        return `<img src="https://img.icons8.com/arcade/20/000000/experimental-fire-element-arcade.png"/>
        `
    }else if(e === 'notCheck'){
        return null;
    }else{
        return `<img src="https://img.icons8.com/external-those-icons-flat-those-icons/20/000000/external-Clover-objects-those-icons-flat-those-icons.png"/>
        `
    }
};

function renderIconOld(e){
    if(e === '0' || e === null){
        return `<i class="bx bx-x fs-4" style="color:red"></i>`
    }else{
        return `<i class="bx bx-check-circle fs-4" style="color:green"></i>`
    }
};


function renderImg(e){
    if(e === '0' || e === null){
        return "";
    }else{
        return e;
    }
}

// ======================= HAFM SUBMIT FORM =========================
function submitFormData(id, responseJson)
{
    var url =  domainName + "/30d/api/submitForm.php";
    $.get(url, {idForm: id, response: responseJson },
    function(data){
        $('#completedHtml').html(data);
      })
}
// ======================= HAFM SUBMIT FORM ĐIỂM DANH =========================
function submitDiemDanh(nhom, id_thanhvien)
{
    var url =  "https://x3.gnh.vn/30d/api/submitDiemDanh.php";
    $.get(url, {nhom: nhom, id_thanhvien: id_thanhvien },
    function(data){
        $('#completedHtml').html(data);
      })
}
// ======================= HAFM SUBMIT FORM Feedback mentor và mentee =========================
function submitFeedback(id_thanhvien, id_form, id_tvdanhgia, vi_tri, diem_manh, diem_yeu)
{
    var url =  domainName + "/30d/api/submitFeedback.php";
    $.post(url, {id_thanhvien: id_thanhvien, id_form: id_form, id_tvdanhgia: id_tvdanhgia, vi_tri: vi_tri, diem_manh: diem_manh, diem_yeu: diem_yeu},
    function(data){
        $('#completedHtml').html(data);
      })
}

// ======================= HAFM SUBMIT FORM Feedback mentor và mentee =========================
function submitFeedback2(id_thanhvien, id_form, id_tvdanhgia, vi_tri, diem_manh, diem_yeu)
{
    var url =  domainName + "/30d/api/submitFeedback.php";
    $.post(url, {id_thanhvien: id_thanhvien, id_form: id_form, id_tvdanhgia: id_tvdanhgia, vi_tri: vi_tri, diem_manh: diem_manh, diem_yeu: diem_yeu},
    function(data){
        $('#completedHtml').html(data);
      })
}


// ======================= HAFM SUBMIT FORM =========================
function submitFormDataPost(id, responseJson)
{
    var url =  domainName + "/30d/api/submitForm.php";
    $.post(url, {idForm: id, response: responseJson },
    function(data){
        $('#completedHtml').html(data);
      })
}
function submitFormDataPost3(id, responseJson)
{
    var url =  domainName + "/30d/api/v3/submitForm.php";
    $.post(url, {idForm: id, response: responseJson },
    function(data){
        $('#completedHtml').html(data);
      })
}

function submitFormDataPost4(id, responseJson)
{
    var url =  domainName + "/30d/api/v4/submitForm.php";
    $.post(url, {idForm: id, response: responseJson },
    function(data){
        $('#completedHtml').html(data);
      })
}

//========================Hàm submit form 3d =======================
function submitFormData3d(id, responseJson)
{
    var url =  domainName + "/30d/api/v4/submitForm3d.php";
    $.post(url, {idForm: id, response: responseJson },
    function(data){
        $('#completedHtml').html(data);
      })
}

function submitFormDataDISC(id, ho_ten, nam_sinh, phone, email, disc_d, disc_i, disc_s, disc_c)
{
    var url =  domainName + "/30d/api/v4/submitFormDISC.php";
    $.post(url, {idForm: id, ho_ten: ho_ten, nam_sinh: nam_sinh, phone: phone, email: email, disc_d: disc_d, disc_i: disc_i, disc_s: disc_s, disc_c: disc_c},
    function(data){
        $('#completedHtml').html(data);
      })
}
//========================Hàm show thông báo modal===============
/* Ví dụ cách sử dụng 
 showModal({
        title: 'Thông báo', 
        msg: '<h4>hehehehe</h4> heioheohohsio ioahsdo áhdioáhdo<p class="text-danger">ddddđ </p>', 
        iddiv: 'modalDiv',
        type: 'success'
 });

 */

function showModal(configObj){
    title  = configObj.title;
    msg  = configObj.msg; 
    typeModal  = configObj.type; 
    var htmlString = `<div class="modal fade" id="modalId" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-${typeModal}">
            <div class="modal-header border-dark">
                <h4 class="modal-title text-dark">${title}</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                ${msg}
            </div>
            <!-- <div class="modal-footer border-dark">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Đóng</button>
            </div> -->
        </div>
    </div>
</div>`;
// $('#'+iddiv).html(htmlString);
$('body').append(htmlString);
$('#modalId').modal('show');
}//function showModal



// ===============================ĐẾM SỐ LƯỢNG=======================================

function getSoLuongThanhVien(){
    $.get(domainName + "/thongke/api/getSoLuong.php?type=thanhvien",
        function(responseData){
        $("#so-luong-thanh-vien").text(responseData);
    })
};


// hàm đếm số lượng ảnh checkin thói quen
function getSoLuongAnh(){
    $.get(domainName + "/thongke/api/getSoLuong.php?type=tonganh", 
        function(responseData){
            $("#so-luong-anh").text(responseData);
    })
}
// Hàm Check img có tồn tại hay không
function imageExists(image_url) {
    var http = new XMLHttpRequest();
    http.open("HEAD", image_url, false);
    http.send();
    $("img").text("S: "+http.status);
    if (http.status != 404) {
      return image_url;
    } else {
      return domainName + "/assets/images/avatars/avatarDefault.png";
    }
}


// Call button Zoom
function callButtonZoom(){
    var getZoomApi = domainName + '/assets/php/zoom/getZoomLinkFromEmail.php?email='+ myUserEmail;
    $.ajax({
        type: "GET",
        dataType: "json",
        url: getZoomApi,
        complete: function(data){
            if (data !== null){
                var result = data.responseJSON[0].join_url;
                $('#clickJoinZoom').attr("href", result);
                $('#menubar-clickJoinZoom').attr("href", result);
                
            }else{
                $('#clickJoinZoom').remove();
                $('#menubar-clickJoinZoom').remove();
                $('#thongbao-clickJoinZoom').append(`<p>Bạn vui lòng đăng nhập đúng email đã đăng ký với BTC</p>`);
            }

        }
    });
};

// sử dụng thư viện Lightbox JS, truyền tham số 
function userFullscreenImageLightbox (classImageDataTonggle){
    document.querySelectorAll(classImageDataTonggle).forEach((el) => el.addEventListener('click', (e) => {
        e.preventDefault();
        const lightbox = new Lightbox(el, {
            keyboard: true,
            size: 'xl',
        });
        lightbox.show();
    }));
};

//  Icon => Ảnh
function renderIconHasImage(e){
    if(e === '0' || e === null){
        return `🔥`;
    }else if(e === 'notCheck'){
        return null;
    }else{
        // Lấy tham số từ data-toggle
        return `<a href="${e}" class="table__icon-has-image" data-caption="Nhấn ESC hoặc nút X ở góc trên cùng bên phải để đóng">
                    🍀
                </a>`;
    }
};

// Ảnh => Ảnh
function renderImgDataTable(e){
    if(e === '0' || e === null){
        return ``;
    }else{
        return `<a href="${e}" class="table__image-has-image" data-caption="Nhấn ESC hoặc nút X ở góc trên cùng bên phải để đóng">
                    <img src="${e}"  alt="" class="img-fluid"></img>
                </a>`;
    }
};

// null => Ẩn
function renderNullTable(e){
    if(e === '0' || e === null){
        return ``;
    }else{
        return e;
    }
};


// HÀM GỌI BẢNG DATATABLES
function getDataTable(urlApi, idDivTable, customObjTables) {
    // phần cài đặt chung cho tất cả các bảng
    let objSetting = {
        ajax: {
            url: urlApi,
            dataSrc: ''
        },
        fixedHeader: true,
        pageLength: 10,
        scrollY:        "700px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         true,
        fixedColumns:   {
            left: 1,
            right: 0,
        },
        reponsive: true,
        language: {
            url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/vi.json"
        },
        reponsive: true
    };

    let result = {...objSetting,...customObjTables};

    // call bảng
    $(idDivTable).DataTable(result);

}