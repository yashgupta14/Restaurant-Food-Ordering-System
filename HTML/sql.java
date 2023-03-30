import java.sql.*;
public class DBConnection {

public static void main(String[] args) throws SQLException {
try {

Class.forName("com.mysql.jdbc.Driver");
Connection con = DriverManager.getConnection
("jdbc:mysql://localhost:3306/JnnDB", "root", "0129");

PreparedStatement ps = con.prepareStatement
("select * from STUDENT");
ResultSet rs = ps.executeQuery();
while (rs.next()) {
System.out.print("| "+rs.getInt("sid"));
System.out.print("| "+rs.getString("name"));
System.out.print("|"+rs.getInt("did")+" |\n");
}

System.out.println("Inserting records into the table...");
Statement stmt = con.createStatement();
String sql = "INSERT INTO Student VALUES (209,3, ‘Kavita')";
stmt.executeUpdate(sql);
}