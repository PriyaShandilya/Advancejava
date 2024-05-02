package pack;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;

public class Main {
    public static void main(String[] args) throws Exception {
        Class.forName("com.mysql.cj.jdbc.Driver");
        Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/studentdb","root","priya@465");

        PreparedStatement pst = con.prepareStatement("insert into students values('1','dominos','23','45.00', 'female')");

        int i = pst.executeUpdate();
        if (i > 0) {
            System.out.println("updated");
        } else {
            System.out.println("failed");
        }
    }
}