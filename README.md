# PHP-Data-Structure-and-Algorithms
Đề bài yêu cầu tìm hiểu về 1 thuật toán. <br>
Thực hiện bởi: Nguyễn Đoàn Đăng

Download code và run code tại đường dẫn https://github.com/dnang36/PHP-Data-Structure-and-Algorithms

# Kiến thức thu được:
## Algorithms

### Binary Search

- Thụât toán tìm kiếm nhị phân (Binary Search) hay còn được gọi là tìm kiếm một nửa là thụât toán tiếp kiếm được sử dụng rất nhiều trong thực tế cho phép tìm kiếm vị trí của một phần tử trong một mảng đã được sắp xếp.
- Thụât toán tìm kiếm nhị phân thực hiện tìm kiếm một mảng đã sắp xếp bằng cách liên tục chia các khoảng tìm kiếm thành 1 nửa. Bắt đầu với một khoảng từ phần tử đầu mảng, tới cuối mảng. Nếu giá trị của phần tử cần tìm nhỏ hơn giá trị của phần từ nằm ở giữa khoảng thì thu hẹp phạm vi tìm kiếm từ đầu mảng tới giửa mảng và nguợc lại. Cứ thế tiếp tục chia phạm vi thành các nửa cho dến khi tìm thấy hoặc đã duyệt hết.
- Thuật toán tìm kiếm nhị phân tỏ ra tối ưu hơn so với tìm kiếm tuyết tính ở các mảng có độ dài lớn và đã được sắp xếp. Ngược lại, tìm kiếm tuyến tính sẽ tỏ ra hiệu quả hơn khi triển khai trên các mảng nhỏ và chưa được sắp xếp.
- Thuật toán tìm kiếm nhi phân là một thuật toán khá thông dụng và chỉ dùng được với một mảng đã sắp xếp. Để triển khai thuật toán này hãy chắc chắn rằng mảng đã được sắp xếp. Sau đây là ý tưởng triển khai thuật toán.
  - Xét một đoạn trong mảng arr[left...right]. Lúc này giá trị của left và right lần luợt là 0 và số phần tử của mảng - 1.
  - So sánh x với phần tử nằm ở vị trí chính giữa của mảng (mid = (left + right) /2). Nếu x bằng arr[mid] thì trả về vị trí và thoát vòng lặp.
  - Nếu x < arr[mid] thì chắc chắn x sẽ nằm ở phía bên trái tức là từ arr[left....mid-1].
  - Nếu x > arr[mid] thì chắc chắn x sẽ nằm ở phía bên phải mid tức là ở khoảng arr[mid+1...right].
  - Tiếp tục thực hiện chia đôi các khoảng tìm kiếm tới khi nào tìm thấy được vị trí của x trong mảng hoặc khi đã duyệt hết mảng.
- Người ta đã chứng minh được độ phực tạp của thụât toán tìm kiếm nhi phân trong trường hợp tốt nhất là O(1), trong trường hợp xấu nhất là O(log2n) và trung bình cũng là O(log2n). Tuy nhiên, ta không nên quên rằng trước khi sử dụng tìm kiếm nhị phân, dãy khoá phải được sắp xếp rồi, tức là thời gian chi phí cho việc sắp xếp cũng phải tính đến.