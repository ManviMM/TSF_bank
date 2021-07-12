CREATE TABLE DATA(id int(5) primary key AUTO_INCREMENT NOT NULL, 
        name varchar(50) NOT NULL, 
        email varchar(50) NOT NULL, 
        accno varchar(20)NOT NULL, 
        balance int(10) NOT NULL);

        
INSERT INTO DATA(name,email,accno,balance) VALUES("manvi","manvi@gmail.com","UIN00010241",80000);


CREATE TABLE transcation( id int(2) AUTO_INCREMENT NOT NULL PRIMARY KEY,
                         transcat DATETIME DEFAULT CURRENT_TIMESTAMP,
                         sender varchar(20) NOT NULL,
                         receiver varchar(20) NOT NULL,
                         balance int (10) NOT NULL);
                         

<tbody>
                    <?php
                        while($rows= mysqli_fetch_assoc($result)){ ?>
                            <tr>
                                <td> <?php echo $rows['id'] ?> </td>
                                <td> <?php echo $rows['name'] ?> </td>
                                <td> <?php echo $rows['email'] ?> </td>
                                <td> <?php echo $rows['accno'] ?> </td>
                                <td> <?php echo $rows['balance'] ?> </td>
                                <td>
                                    <a href="userprofile.php?id= <?php echo $rows ['id'] ;?>"> 
                                    <button type="button" class="btnview">VIEW</button>
                                    </a>
                                </td>
                            </tr>
                    <?php } ?>

