import { showKyLuatHanhTrinh } from "/30d/thongke/js/table.render.js";
import { showKyLuatBaiTapTuan } from "/30d/thongke/js/table.render.js";
import { showBangCamKet } from "/30d/thongke/js/table.render.js";
import { showCheckBangCamKet } from "/30d/thongke/js/table.render.js";

$(document).ready(function () {
    showKyLuatHanhTrinh();
    showKyLuatBaiTapTuan();
    showBangCamKet();
    showCheckBangCamKet();
});
