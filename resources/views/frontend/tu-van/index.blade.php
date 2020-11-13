<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('frontend.head')

<body>

    <div id="front-wrapper">
        @include('frontend.header')
    <div id="front-content">
        <div id="cover-advisory">
            <div class="ui container">
            <div class="text-60 text-uppercase text-white text-bold text-shadow">TƯ VẤN - TRẢI  NGHIỆM </div>
            <a class="button-primary anchor advisory-btn" href="https://solar.evn.com.vn/#/calculator" target="_blank">
                Công cụ khảo sát EVNSOLAR
            </a>
        </div>
    </div>
    <div class="advisory-content">
        <div id="front-tabs">
            <div class="container ui">
                <div class="tabs-container">
                    <a class="item anchor text-20 text-bold" href="#">Thủ tục điện</a>
                    <a class="item anchor text-20 text-bold" href="#">Pháp luật</a>
                </div>
            </div>
        </div>
        <div class="template-reference">
            <table id="front-table" class="ui single line table padding-first-child">
                <thead>
                    <tr>
                        <th colspan="2">VĂN BẢN THAM KHẢO</td>
                    </tr>
                </thead>
                <tr>
                    <td>
                      <p>Quyết định 13/2020/QĐ-TTg ngày 06 tháng 4 năm 2020 của Thủ tướng Chính phủ về việc "Quyết định Về cơ chế khuyến khích phát triển điện mặt trời tại Việt Nam"</p>
                    </td>
                    <td>
                        <a href="./documents/01.QD13-CP_CoCheMuaDienNLMTN.pdf" target="_blank" ><i class="ui icon arrow alternate circle down"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>Quyết định 02/2019/QĐ-TTg ngày 08 tháng 01 năm 2019 của Thủ tướng Chính phủ về việc "Sửa đổi, bổ sung một số điều của Quyết định số 11/2017/QĐ-TTg ngày 11 tháng 4 năm 2017 của Thủ tướng Chính phủ về cơ chế khuyến khích phát triển các dự án điện mặt trời tại Việt Nam"</p>
                    </td>
                    <td>
                        <a href="./documents/02.CP_QĐ_02_SuaDoiBoSungQD11.2017_08.01.2019.pdf" target="_blank"><i class="ui icon arrow alternate circle down"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>Thông tư 16/2017/TT-BCT ngày 12 tháng 9 năm 2017 của Bộ Công Thương về việc "Quy định về phát triển dự án và Hợp đồng mua bán điện mẫu áp dụng cho các dự án điện mặt trời"</p>
                    </td>
                    <td>
                      <a href="./documents/03.16_BCT_TT_QuyDinhPhatTrienDuAnVaHopDongMau.pdf" target="_blank"><i class="ui icon arrow alternate circle down"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>Thông tư 05/2019/TT-BCT ngày 11 tháng 3 năm 2019 của Bộ Công Thương về việc "Sửa đổi, bổ sung một số điều của Thông tư số 16/2017/TT-BCT ngày 12 tháng 9 năm 2017 của Bộ trưởng Bộ Công Thương quy định về phát triển dự án và Hợp đồng mua bán điện mẫu áp dụng cho các dự án điện mặt trời"</p>
                    </td>
                    <td>
                        <a href="./documents/04.5_BCT_TT_SuaDoiBoSungTT16.pdf" target="_blank" ><i class="ui icon arrow alternate circle down"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>Văn bản 1534/BTC-CST ngày 31 tháng 1 năm 2019 của Bộ Tài Chínnh về việc "chính sách ưu đãi đối với dự án điện mặt trời trên mái nhà có công suất lắp đặt không quá 50kw"</p>
                    </td>
                    <td>
                        <a href="./documents/05.1534_BTC_Thue_doi_voi_dien_mat_troi_ap_mai.pdf" target="_blank"><i class="ui icon arrow alternate circle down"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p>Văn bản 1532/EVN-KD ngày 27 tháng 3 năm 2019 của Tập đoàn Điện lực Việt Nam về việc "hướng dẫn thực hiện đối với các dự án điện mặt trời trên mái nhà"</p>
                    </td>
                    <td>
                        <a href="./documents/06.1532_EVN_HuongDanThucHien_NLMTAM.pdf" target="_blank"><i class="ui icon arrow alternate circle down"></i></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div id="front-bottom">
        <div class="ui container">
            <div class="ui stackable grid">
                <div class="eight wide column">
                <a class="text-30 anchor" href="index.html#gioi-thieu">
                    Đăng ký <strong> Gói vay</strong>
                </a>
                </div>
                <div class="right aligned eight wide column">
                <a href="#front-wrapper" class="text-20 anchor">
                    Lên đầu trang
                    <i class="ui icon arrow alternate circle up"></i>
                </a>
                </div>

            </div>
        </div>
    </div>
    </div>

    @include('frontend.footer')
</body>

</html>
