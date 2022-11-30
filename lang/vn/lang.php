<?php

return [
    'plugin' => [
        'name' => 'Trang',
        'description' => 'Tính năng trang nội dung và memu',
    ],
    'page' => [
        'menu_label' => 'Trang',
        'template_title' => '%s Trang',
        'delete_confirmation' => 'Bạn có thực sự muốn xóa các trang đã chọn không? Thao tác này cũng sẽ xóa các trang con, nếu có.',
        'no_records' => 'Không tìm thấy trang nào',
        'delete_confirm_single' => 'Bạn có thực sự muốn xóa trang này không? Thao tác này cũng sẽ xóa các trang con, nếu có.',
        'new' => 'Thêm trang',
        'add_subpage' => 'Thêm trang con',
        'invalid_url' => 'Định dạng URL không hợp lệ. URL phải bắt đầu bằng ký hiệu gạch chéo và có thể chứa các chữ số, chữ cái Latinh và các ký hiệu sau: _-/.',
        'url_not_unique' => 'URL này đã được sử dụng bởi một trang khác.',
        'layout' => 'Bố cục',
        'layouts_not_found' => 'Không tìm thấy bố cục nào',
        'saved' => 'Trang đã được lưu thành công.',
        'tab' => 'Trang',
        'manage_pages' => 'Quản lý các trang nội dung',
        'manage_menus' => 'Quản lý các menu',
        'access_snippets' => 'Truy cập đoạn trích',
        'manage_content' => 'Quản lý nội dung tĩnh',
    ],
    'menu' => [
        'menu_label' => 'Menus',
        'delete_confirmation' => 'Bạn có thực sự muốn xóa các menus đã chọn không?',
        'no_records' => 'Không tìm thấy menu',
        'new' => 'Thêm menu',
        'new_name' => 'Tên menu mới',
        'new_code' => 'new-menu',
        'delete_confirm_single' => 'Bạn có thực sự muốn xóa menu này không?',
        'saved' => 'Menu đã được lưu thành công.',
        'name' => 'Tên menu',
        'code' => 'Code',
        'items' => 'Phần tử menu',
        'add_subitem' => 'Thêm phần tử con',
        'code_required' => 'Code là bắt buộc',
        'invalid_code' => 'Định dạng code không hợp lệ. Mã có thể chứa các chữ số, chữ cái Latinh và các ký hiệu sau: _-',
    ],
    'menuitem' => [
        'title' => 'Tiêu đề',
        'editor_title' => 'Chỉnh sửa phần tử của menu',
        'type' => 'Loại',
        'allow_nested_items' => 'Cho phép các phần tử lồng nhau',
        'allow_nested_items_comment' => 'Các phần tử lồng nhau có thể được tạo động bởi trang tĩnh và một số loại phần tử khác',
        'url' => 'URL',
        'reference' => 'Tham chiếu',
        'search_placeholder' => 'Tìm kiếm tham chiếu...',
        'title_required' => 'Tiêu đề là bắt buộc',
        'unknown_type' => 'Loại menu không xác định',
        'unnamed' => 'Không có tên',
        'add_item' => 'Thêm <u>P</u>hần tử',
        'new_item' => 'Mục mới',
        'replace' => 'Thay thế mục này bằng các mục con đã tạo của nó',
        'replace_comment' => 'Chọn mục này để đẩy các mục menu đã tạo lên cùng cấp với mục này. Bản thân mục này sẽ bị ẩn.',
        'cms_page' => 'Trang CMS',
        'cms_page_comment' => 'Chọn một trang để mở khi nhấp vào menu.',
        'reference_required' => 'Tham chiếu của menu là bắt buộc.',
        'url_required' => 'URL là bắt buộc',
        'cms_page_required' => 'Vui lòng chọn 1 trang CMS',
        'display_tab' => 'Hiển thị',
        'hidden' => 'Ẩn',
        'hidden_comment' => 'Ẩn menu này để không xuất hiện trên giao diện người dùng.',
        'attributes_tab' => 'Thuộc tính',
        'code' => 'Code',
        'code_comment' => 'Nhập mã menu nếu bạn muốn truy cập mã đó bằng API.',
        'css_class' => 'CSS Class',
        'css_class_comment' => 'Nhập tên CSS class để cung cấp cho menu này một giao diện tùy chỉnh.',
        'external_link' => 'Liên kết bên ngoài',
        'external_link_comment' => 'Mở liên kết cho menu này trong một cửa sổ mới.',
        'static_page' => 'Trang nội dung tĩnh',
        'all_static_pages' => 'Tất cả các trang nội dung tĩnh'
    ],
    'content' => [
        'menu_label' => 'Nội dung',
        'saved' => 'Nội dung đã được lưu thành công.',
        'cant_save_to_dir' => 'Không được phép lưu các tệp nội dung vào thư mục trang tĩnh.',
    ],
    'sidebar' => [
        'add' => 'Thêm',
        'search' => 'Tìm kiếm...',
    ],
    'object' => [
        'invalid_type' => 'Loại đối tượng không xác định',
        'unauthorized_type' => 'Bạn không được phép quản lý đối tượng :type',
        'not_found' => 'Đối tượng được yêu cầu không được tìm thấy.',
    ],
    'editor' => [
        'title' => 'Tiêu đề',
        'new_title' => 'Tiêu đề trang',
        'content' => 'Nội dung',
        'url' => 'URL',
        'filename' => 'Tên tệp',
        'layout' => 'Bố cục',
        'description' => 'Mô tả',
        'preview' => 'Xem trước',
        'enter_fullscreen' => 'Chế độ toàn màn hình',
        'exit_fullscreen' => 'Thoát chế độ toàn màn hình',
        'hidden' => 'Ẩn',
        'hidden_comment' => 'Các trang ẩn chỉ có thể truy cập được bởi quản trị viên.',
        'navigation_hidden' => 'Ẩn trong điều hướng',
        'navigation_hidden_comment' => 'Chọn hộp này để ẩn trang này khỏi các menu và breadcrumbs được tạo tự động.',
    ],
    'snippet' => [
        'partialtab' => 'Đoạn trích',
        'code' => 'Mã đoạn trích',
        'code_comment' => 'Nhập mã để cung cấp phần này dưới dạng đoạn mã trong plugin Trang tĩnh.',
        'name' => 'Tên',
        'name_comment' => 'Tên được hiển thị trong danh sách đoạn mã trong thanh bên Trang tĩnh và trên Trang khi đoạn mã được thêm vào.',
        'no_records' => 'Không tìm thấy đoạn trích nào',
        'menu_label' => 'Đoạn trích',
        'column_property' => 'Tiêu đề',
        'column_type' => 'Loại',
        'column_code' => 'Mã',
        'column_default' => 'Mặc định',
        'column_options' => 'Tùy chọn',
        'column_type_string' => 'Chuỗi ký tự',
        'column_type_checkbox' => 'Hộp kiểm',
        'column_type_dropdown' => 'Trình đơn thả xuống',
        'not_found' => 'Đoạn mã được yêu cầu với mã :code không tìm thấy trong theme.',
        'property_format_error' => 'Mã thuộc tính phải bắt đầu bằng chữ cái Latinh và chỉ có thể chứa các chữ cái và chữ số Latinh',
        'invalid_option_key' => 'Tùy chọn: :key không hợp lệ. Các tùy chọn chỉ có thể chứa các chữ số, chữ cái Latinh và các ký tự _ và -',
    ],
    'component' => [
        'static_page_name' => 'Trang tĩnh',
        'static_page_description' => 'Hiển thị trang tĩnh trong bố cục CMS.',
        'static_page_use_content_name' => 'Sử dụng trường nội dung trang',
        'static_page_use_content_description' => 'Nếu bỏ chọn, phần nội dung sẽ không xuất hiện khi chỉnh sửa trang tĩnh. Nội dung trang sẽ chỉ được xác định thông qua trình giữ chỗ và các biến.',
        'static_page_default_name' => 'Bố cục mặc định',
        'static_page_default_description' => 'Xác định bố cục này làm mặc định cho các trang mới',
        'static_page_child_layout_name' => 'Bố cục trang con',
        'static_page_child_layout_description' => 'Bố cục để sử dụng làm mặc định cho bất kỳ trang con mới nào',
        'static_menu_name' => 'Menu',
        'static_menu_description' => 'Hiển thị menu trong bố cục CMS.',
        'static_menu_code_name' => 'Menu',
        'static_menu_code_description' => 'Chỉ định mã của menu mà thành phần sẽ xuất ra.',
        'static_breadcrumbs_name' => 'Đường dẫn',
        'static_breadcrumbs_description' => 'Hiển thị đường dẫn của trang.',
        'child_pages_name' => 'Trang con',
        'child_pages_description' => 'Hiển thị danh sách các trang con cho trang hiện tại',
    ]
];