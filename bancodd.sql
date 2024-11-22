CREATE TABLE `alunos` (
                          `id` int NOT NULL,
                          `nome` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
                          `email` varchar(512) COLLATE utf8mb4_general_ci NOT NULL,
                          `turma` int NOT NULL,
                          `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
                          `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
                          `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                          `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `email`, `turma`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
    (1, 'Teste', 'teste@teste.com', 123456, 'e10adc3949ba59abbe56e057f20f883e', '2024-07-05 01:18:06', '2024-07-05 01:18:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`turma`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;