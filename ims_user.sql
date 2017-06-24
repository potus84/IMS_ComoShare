
--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodation`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `admin` BOOLEAN
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accommodation`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `admin`) VALUES
(10, 'admin', 'admin', 'Admin', 'User', 'admin@test.com', '123456789',  true),
(12, 'test', 'test', 'Test', 'Elek', 'test@test.com','123456789', false),
(13, 'john', '123456', 'John', 'Doe', 'john@test.com','123456789', false),
(14, 'jane', '123456', 'Jane', 'Doe', 'jane@test.com','123456789', false);

--
-- Indexes for table `accommodation`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `accommodation`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
