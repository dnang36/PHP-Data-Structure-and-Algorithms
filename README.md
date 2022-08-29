# PHP-Data-Structure-and-Algorithms
Đề bài yêu cầu tìm hiểu về cấu trúc dữ liệu và giải thuật. <br>
Thực hiện bởi: Nguyễn Đoàn Đăng

Download code và run code tại đường dẫn https://github.com/dnang36/PHP-Data-Structure-and-Algorithms

# Kiến thức thu được:

## Data Structure
## 1. Khái niệm:
- Cấu trúc dữ liệu là cách lưu trữ, tổ chức dữ liệu có thứ tự, có hệ thống để dữ liệu có thể được sử dụng một cách hiệu quả.
- Đặc điểm của cấu trúc dữ liệu:
   - Tính đúng đắn: Việc triển khai cấu trúc dữ liệu phải triển khai đúng giao diện của nó.
   - Độ phức tạp về thời gian: Thời gian chạy hoặc thời gian thực thi phải đạt ở mức thấp nhất có thể.
   - Độ phức tạp về không gian: Việc sử dụng bộ nhớ cho việc thao tác với cấu trúc dữ liệu phải càng ít.
- Tại sao Cấu trúc dữ liệu là cần thiết? : Ngày nay, các ứng dụng ngày càng phức tạp và lượng dữ liệu ngày càng lớn với nhiều kiểu đa dạng. Việc này làm xuất hiện 3 vấn đề lớn mà mỗi lập trình viên phải đối mặt:
   - Tìm kiếm dữ liệu:
   - Tốc độ bộ vi xử lý:
   - Đa yêu cầu
   - Để xử lý các vấn đề trên, các cấu trúc dữ liệu là một giải pháp tuyệt vời. Dữ liệu có thể được tổ chức trong cấu trúc dữ liệu theo một cách để khi thực hiện tìm kiếm một phần tử nào đó thì dữ liệu yêu cầu sẽ được tìm thấy ngay lập tức.
- Độ phức tạp thời gian thực thi trong cấu trúc dữ liệu và giải thuật:
- Có 3 trường hợp thường được sử dụng để so sánh thời gian thực thi của các cấu trúc dữ liệu khác nhau:
   - Trường hợp xấu nhất (Worst Case): là tình huống mà một phép tính của cấu trúc dữ liệu nào đó tốn thời gian tối đa (thời gian dài nhất).
   - Trường hợp trung bình (Average Case): miêu tả thời gian thực thi trung bình một phép tính của một cấu trúc dữ liệu.
   - Trường hợp tốt nhất (Best Case): là tình huống mà thời gian thực thi một phép tính của một cấu trúc dữ liệu là ít nhất.

2. Các kiểu cấu trúc dữ liệu:<br>

## 2.1. Mảng:
- Mảng là một cấu trúc có kích thước cố định, có thể chứa các phần tử có cùng kiểu dữ liệu. Nó có thể là một mảng số nguyên, một mảng số thực, một mảng chuỗi ký tự hoặc thậm chí một mảng chứa các mảng con (chẳng hạn như mảng 2 chiều). Mảng có sử dụng chỉ số, có nghĩa là có thể truy cập ngẫu nhiên.
- Các thao tác với mảng:
  - Duyệt phần tử: Đi qua các phần tử.
  - Tìm kiếm: Tìm kiếm một phần tử trong mảng. Bạn có thể tìm kiếm phần tử theo giá trị của nó hoặc chỉ số của nó
  - Cập nhật: Cập nhật giá trị của một phần tử hiện có tại một chỉ số nhất định
  - Việc chèn các phần tử vào một mảng và xóa các phần tử khỏi một mảng không thể được thực hiện ngay lập tức vì các mảng có kích thước cố định. Nếu bạn muốn chèn một phần tử vào một mảng, trước tiên bạn sẽ phải tạo một mảng mới với kích thước tăng lên (kích thước hiện tại + 1), sao chép các phần tử hiện có và thêm phần tử mới. Tương tự đối với việc xóa với một mảng mới có kích thước giảm.
- Ứng dụng của mảng:
  - Được sử dụng làm các khối xây dựng để xây dựng các cấu trúc dữ liệu khác như danh sách mảng, heap, bảng băm, vectơ và ma trận.
  - Được sử dụng cho các thuật toán sắp xếp khác nhau như sắp xếp chèn, sắp xếp nhanh, sắp xếp bong bóng và sắp xếp hợp nhất

## 2.2. Danh sách liên kết:
- Danh sách liên kết là một cấu trúc tuần tự bao gồm một chuỗi các phần tử theo thứ tự tuyến tính được liên kết với nhau. Do đó, bạn phải truy cập dữ liệu một cách tuần tự và không thể truy cập ngẫu nhiên. Danh sách liên kết cung cấp một biểu diễn đơn giản và linh hoạt của các tập hợp động.
  - Các phần tử trong danh sách liên kết được gọi là các nút.
  - Mỗi nút chứa một khóa và một con trỏ đến nút kế tiếp của nó, được gọi là nút tiếp theo.
  - Thuộc tính có tên head trỏ đến phần tử đầu tiên của danh sách được liên kết.
  - Phần tử cuối cùng của danh sách liên kết được gọi là tail.
- Các kiểu danh sách liên kết:
  - Danh sách liên kết đơn: Việc duyệt các phần tử được thực hiện theo tuần tự.
  - Danh sách liên kết đôi: Việc duyệt các phần tử có thể được thực hiện theo cả hai hướng. Các nút bao gồm một con trỏ bổ sung được gọi là prev, trỏ đến nút trước đó.
  - Danh sách liên kết vòng: Danh sách liên kết vòng là danh sách liên kết trong đó con trỏ prev của phần đầu trỏ đến phần đuôi và con trỏ tiếp theo của phần đuôi trỏ đến phần đầu.
- Các thao tác với danh sách liên kết:
  - Tìm kiếm: Tìm phần tử đầu tiên có khóa k trong danh sách liên kết đã cho bằng tìm kiếm tuyến tính đơn giản và trả về một con trỏ đến phần tử này
  - Chèn: Chèn một khóa vào danh sách liên kết. Việc chèn có thể được thực hiện theo 3 cách khác nhau: chèn vào đầu danh sách, chèn vào cuối danh sách và chèn vào giữa danh sách.
  - Xóa: Loại bỏ một phần tử x khỏi danh sách liên kết nhất định. Bạn không thể xóa một nút bằng một bước duy nhất. Việc xóa có thể được thực hiện theo 3 cách khác nhau: xóa ở đầu danh sách, xóa ở cuối danh sách và xóa ở giữa danh sách.
- Ứng dụng của danh sách liên kết:
  - Được sử dụng để quản lý bảng ký hiệu trong thiết kế trình biên dịch. 


## 2.3. Ngăn xếp - Stack
- Stack (ngăn xếp) là một cấu trúc dữ liệu danh sách, trong đó việc thêm và lấy các phần tử được thực hiện theo quy tắc LIFO (Last-IN/First-Out), có nghĩa là phần tử nào được đưa vào sau cùng thì sẽ được lấy ra trước tiên.
- Các thao tác với ngăn xếp:
  - Push: Thêm một phần tử vào đỉnh của ngăn xếp, số phần tử của ngăn xếp tăng lên 1.
  - Pop: Xóa bỏ phần tử đầu tiên ở đỉnh của ngăn xếp, số phần tử của ngăn xếp giảm đi 1.
  - Top: Lấy giá trị của phần tử đầu tiên ở đỉnh của ngăn xếp, số phần tử của ngăn xếp không thay đổi.
  - IsEmpty: Kiểm tra ngăn xếp trống hay không. Ngăn xếp trống là ngăn xếp không có phần tử nào.
  - IsFull: Kiểm tra ngăn xếp đã đầy hay chưa. Thao tác này không phải lúc nào cũng có.
  - Size: Lấy số lượng phần tử stack đang có.
- Một Stack có thể được triển khai bằng cấu trúc dữ liệu dạng mảng, Struct, con trỏ hoặc danh sách liên kết. Stack có thể có kích thước cố định hoặc có thể có kích thước động.
- Ứng dụng của ngăn xếp:
- 
## 2.4. Hàng đợi - Queue
- Queue (hàng đợi) là một cấu trúc dữ liệu danh sách, trong đó việc thêm và lấy các phần tử được thực hiện theo quy tắc FIFO(Fist-In/First-Out), có nghĩa là phần tử nào được thêm vào đầu tiên thì được lấy ra đầu tiên.
- Các thao tác thông dụng của Queue bao gồm:
  - init – tạo một hàng đợi
  - enqueue – thêm một phần tử vào phần cuối (đuôi – tail) của hàng đợi.
  - dequeue – lấy ra phần tử đầu tiên (đầu – head) của hàng đợi (đầu).
  - isEmpty – trả về true/false để xác định xem hàng đợi này có chứa phần tử nào hay không.
- Giống như trong ngăn xếp, hàng đợi cũng có thể được triển khai bằng kiểu cấu trúc mảng, danh sách liên kết, con trỏ và cấu trúc struct
- Ứng dụng của hàng đợi:

## 2.5. Cấu trúc dữ liệu cây:
- Cây là một cấu trúc dữ liệu phân cấp phi tuyến tính bao gồm các nút được kết nối với nhau bằng các cạnh.
- Cấu trúc dữ liệu cây là một cấu trúc phân cấp, nơi dữ liệu được tổ chức phân cấp và được liên kết với nhau. Cấu trúc này khác với danh sách liên kết, trong khi đó, trong danh sách liên kết, các phần tử được liên kết theo một thứ tự tuyến tính.
- Nhiều kiểu cấu trúc cây khác nhau đã được phát triển trong suốt nhiều thập kỷ qua, để phù hợp với các ứng dụng nhất định và đáp ứng các hạn chế nhất định. Một số ví dụ là cây tìm kiếm nhị phân,
- Cây tìm kiếm nhị phân: Cây tìm kiếm nhị phân (BST), là một cây nhị phân mà trong đó, dữ liệu được tổ chức theo cấu trúc phân cấp. Cấu trúc dữ liệu này lưu trữ các giá trị theo thứ tự được sắp xếp.


## Algorithms:
## 1. Khái niệm:
- Thuật toán hay giải thuật (tiếng anh là Algorithm) định nghĩa dễ hiểu rằng, thuật toán là “thuật” (phương pháp) để giải quyết 1 bài toán.
- Thuật toán là một phương thức bao gồm các bước nhằm xác định một tập hợp các câu lệnh thực thi theo một thứ tự nhất định nhằm đạt được kết quả đầu ra mong muốn. Thuật toán thường được tạo độc lập với các ngôn ngữ lập trình, điều này đồng nghĩa với việc một thuật toán có thể được triển khai bằng nhiều ngôn ngữ lập trình khác nhau.
- Đặc điểm của thuật toán:
  - Tính rõ ràng: Mỗi bước thực hiện, đầu vào và đầu ra phải rõ ràng.
  - Đầu vào: Một thuật toán phải có đầu vào được định nghĩa cụ thể.
  - Đầu ra: Một thuật toán phải có một hoặc nhiều đầu ra được xác định rõ ràng.
  - Tính hữu hạn: Thuật toán phải kết thúc sau một số bước hữu hạn.
  - Tính khả thi: Có thể làm được và đưa ra được kết quả.
  - Tính độc lập: Một thuật toán phải có hướng dẫn từng bước, không phụ thuộc vào bất kỳ ngôn ngữ lập trình nào.
- Độ phức tạp của thuật toán: Giả sử X là một thuật toán và n là kích thước của dữ liệu đầu vào, thời gian và không gian mà thuật toán X sử dụng là hai yếu tố chính quyết định sự hiệu quả của X.
  - Yếu tố thời gian: Thời gian được đo bằng cách đếm số lượng các thao tác.
  - Yếu tố không gian: Không gian được đo bằng cách tính toán không gian bộ nhớ tối đa mà một thuật toán yêu cầu.

## 2. Các thuật toán:
## 2.1. Search:

### 2.1.1. Linear Search
- Linear Search là một giải thuật tìm kiếm rất cơ bản. Trong kiểu tìm kiếm này, một hoạt động tìm kiếm liên tiếp được diễn ra qua tất cả từng phần tử. Mỗi phần tử đều được kiểm tra và nếu tìm thấy bất kỳ kết nối nào thì phần tử cụ thể đó được trả về; nếu không tìm thấy thì quá trình tìm kiếm tiếp tục diễn ra cho tới khi tìm kiếm hết dữ liệu.
- Đánh giá: Mặc dù giải thuật Tìm kiếm tuần tự rất đơn giản và dễ cài đặt, tuy nhiên nhược điểm của nó nằm ở độ phức tạp. Trong trường hợp tốt nhất, giải thuật có độ phức tạp là O(1),O(1), nhưng trong trường hợp xấu nhất lên tới O(n)O(n). Vì vậy độ phức tạp tổng quát của giải thuật là O(n),O(n), chỉ phù hợp với những bài toán có kích thước không gian tìm kiếm nhỏ.
### 2.1.2. Binary Search

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

## 2.2. Sorting:

### Sắp xếp nổi bọt (Bubble sort)
- Sắp xếp nổi bọt là một giải thuật sắp xếp đơn giản. Giải thuật sắp xếp này được tiến hành dựa trên việc so sánh cặp phần tử liền kề nhau và tráo đổi thứ tự nếu chúng không theo thứ tự.
- Giải thuật này không thích hợp sử dụng với các tập dữ liệu lớn khi mà độ phức tạp trường hợp xấu nhất và trường hợp trung bình là Ο(n2) với n là số phần tử.
- Giải thuật sắp xếp nổi bọt là giải thuật chậm nhất trong số các giải thuật sắp xếp cơ bản. Giải thuật này còn chậm hơn giải thuật đổi chỗ trực tiếp mặc dù số lần so sánh bằng nhau, nhưng do đổi chỗ hai phần tử kề nhau nên số lần đổi chỗ nhiều hơn.
### Sắp xếp chèn (Insertion Sort)
- Thuật toán sắp xếp chèn thực hiện sắp xếp dãy số theo cách duyệt từng phần tử và chèn từng phần tử đó vào đúng vị trí trong mảng con(dãy số từ đầu đến phần tử phía trước nó) đã sắp xếp sao cho dãy số trong mảng sắp đã xếp đó vẫn đảm bảo tính chất của một dãy số tăng dần.
  - Khởi tạo mảng với dãy con đã sắp xếp có k = 1 phần tử(phần tử đầu tiên, phần tử có chỉ số 0)
  - Duyệt từng phần tử từ phần tử thứ 2, tại mỗi lần duyệt phần tử ở chỉ số i thì đặt phần tử đó vào một vị trí nào đó trong đoạn từ [0…i] sao cho dãy số từ [0…i] vẫn đảm bảo tính chất dãy số tăng dần. Sau mỗi lần duyệt, số phần tử đã được sắp xếp k trong mảng tăng thêm 1 phần tử.
  - Lặp cho tới khi duyệt hết tất cả các phần tử của mảng.
- Độ  phức tạp thuật toán : Trường hợp tốt: O(n), Trung bình: O(n^2), Trường hợp xấu: O(n^2), Không gian bộ nhớ sử dụng: O(1)
### Sắp xếp chọn (Selection Sort)
- Thuật toán selection sort sắp xếp một mảng bằng cách đi tìm phần tử có giá trị nhỏ nhất(giả sử với sắp xếp mảng tăng dần) trong đoạn đoạn chưa được sắp xếp và đổi cho phần tử nhỏ nhất đó với phần tử ở đầu đoạn chưa được sắp xếp(không phải đầu mảng). Thuật toán sẽ chia mảng làm 2 mảng con
  - Một mảng con đã được sắp xếp
  - Một mảng con chưa được sắp xếp
- Tại mỗi bước lặp của thuật toán, phần tử nhỏ nhất ở mảng con chưa được sắp xếp sẽ được di chuyển về đoạn đã sắp xếp.
- Độ  phức tạp thuật toán : Trường hợp tốt: O(n), Trung bình: O(n^2), Trường hợp xấu: O(n^2), Không gian bộ nhớ sử dụng: O(1)
### Sắp xếp trộn (Merge Sort)
- Merge Sort hay thuật toán sắp xếp trộn là một trong những thuật toán sắp xếp phổ biến nhất dựa trên nguyên tắc của thuật toán chia để trị. Ở đây, một bài toán được chia thành nhiều bài toán con. Mỗi vấn đề con được giải quyết một cách riêng lẻ. Cuối cùng, các vấn đề con sẽ được kết hợp để tạo thành giải pháp cuối cùng cho bài toán.
### sắp xếp nhanh (Quick Sort)
- Giải thuật sắp xếp nhanh (Quick Sort) là một giải thuật hiệu quả cao và dựa trên việc chia mảng dữa liệu thành các mảng nhỏ hơn. Giải thuật sắp xếp nhanh chia mảng thành hai phần bằng cách so sánh từng phần tử của mảng với một phần tử được chọn gọi là phần tử chốt (Pivot): một mảng bao gồm các phần tử nhỏ hơn hoặc bằng phần tử chốt và mảng còn lại bao gồm các phần tử lớn hơn hoặc bằng phần tử chốt.
- Tiến trình chia này diễn ra tiếp tục cho tới khi độ dài của các mảng con đều bằng 1. Giải thuật sắp xếp nhanh tỏ ra khá hiệu quả với các tập dữ liệu lớn khi mà độ phức tạp trường hợp trung bình và trường hợp xấu nhất là O(nlogn) với n là số phần tử.