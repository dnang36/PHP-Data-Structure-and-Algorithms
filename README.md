# PHP-Data-Structure-and-Algorithms
Đề bài yêu cầu tìm hiểu về 1 thuật toán. <br>
Thực hiện bởi: Nguyễn Đoàn Đăng

Download code và run code tại đường dẫn https://github.com/dnang36/PHP-Data-Structure-and-Algorithms

# Kiến thức thu được:
## Algorithms:
Thuật toán hay giải thuật (tiếng anh là Algorithm) định nghĩa dễ hiểu rằng, thuật toán là “thuật” (phương pháp) để giải quyết 1 bài toán.
## Search:

### Linear Search
- Ý tưởng: Tìm kiếm tuần tự (Sequential Search hay Linear Search) là một giải thuật đơn giản, rất dễ cài đặt. Bắt đầu từ đối tượng a_1,a
  1
  ​
  , duyệt qua tất cả các đối tượng, cho tới khi tìm thấy đối tượng có khóa mong muốn, hoặc duyệt hết toàn bộ dãy mà không tìm thấy khóa đó.
- Đánh giá: Mặc dù giải thuật Tìm kiếm tuần tự rất đơn giản và dễ cài đặt, tuy nhiên nhược điểm của nó nằm ở độ phức tạp. Trong trường hợp tốt nhất, giải thuật có độ phức tạp là O(1),O(1), nhưng trong trường hợp xấu nhất lên tới O(n)O(n). Vì vậy độ phức tạp tổng quát của giải thuật là O(n),O(n), chỉ phù hợp với những bài toán có kích thước không gian tìm kiếm nhỏ.
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

## Sorting:

### Sắp xếp nổi bọt (Bubble sort)
- Ý tưởng: Thuật toán sắp xếp nổi bọt thực hiện sắp xếp dãy số bằng cách lặp lại công việc đổi chỗ 2 số liên tiếp nhau nếu chúng đứng sai thứ tự(số sau bé hơn số trước với trường hợp sắp xếp tăng dần) cho đến khi dãy số được sắp xếp.
### Sắp xếp chèn (Insertion Sort)
- Ý tưởng: Thuật toán sắp xếp chèn thực hiện sắp xếp dãy số theo cách duyệt từng phần tử và chèn từng phần tử đó vào đúng vị trí trong mảng con(dãy số từ đầu đến phần tử phía trước nó) đã sắp xếp sao cho dãy số trong mảng sắp đã xếp đó vẫn đảm bảo tính chất của một dãy số tăng dần.


## Data Structure
Cấu trúc dữ liệu là cách lưu trữ, tổ chức dữ liệu có thứ tự, có hệ thống để dữ liệu có thể được sử dụng một cách hiệu quả.
## Ngăn xếp - Stack
- Trong khoa học máy tính, một ngăn xếp (còn gọi là bộ xếp chồng, tiếng Anh: Stack) là một cấu trúc dữ liệu trừu tượng hoạt động theo nguyên lý “vào sau ra trước” (Last In First Out (LIFO). Tức là, phần tử cuối cùng được chèn vào ngăn xếp sẽ là phần tử đầu tiên được lấy ra khỏi ngăn xếp.
- Cấu trúc dữ liệu ngăn xếp bị giới hạn theo cách như trên. Như vậy, việc thao tác với ngăn xếp của chúng ta chỉ bao gồm các hành động sau:
  - Push: Thêm một phần tử vào đỉnh của ngăn xếp, số phần tử của ngăn xếp tăng lên 1.
  - Pop: Xóa bỏ phần tử đầu tiên ở đỉnh của ngăn xếp, số phần tử của ngăn xếp giảm đi 1.
  - Top: Lấy giá trị của phần tử đầu tiên ở đỉnh của ngăn xếp, số phần tử của ngăn xếp không thay đổi.
  - IsEmpty: Kiểm tra ngăn xếp trống hay không. Ngăn xếp trống là ngăn xếp không có phần tử nào.
  - IsFull: Kiểm tra ngăn xếp đã đầy hay chưa. Thao tác này không phải lúc nào cũng có.
  - Size: Lấy số lượng phần tử stack đang có.

## Hàng đợi - Queue
- Queue (hàng đợi) là một cấu trúc dữ liệu danh sách, trong đó việc thêm và lấy các phần tử được thực hiện theo quy tắc FIFO(Fist-In/First-Out), có nghĩa là phần tử nào được thêm vào đầu tiên thì được lấy ra đầu tiên. 
- Các thao tác thông dụng của Queue bao gồm:
  - init – tạo một hàng đợi
  - enqueue – thêm một phần tử vào phần cuối (đuôi – tail) của hàng đợi.
  - dequeue – lấy ra phần tử đầu tiên (đầu – head) của hàng đợi (đầu).
  - isEmpty – trả về true/false để xác định xem hàng đợi này có chứa phần tử nào hay không.

