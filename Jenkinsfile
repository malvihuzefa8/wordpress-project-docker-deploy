pipeline {
    agent any

    stages {

        stage('Git Clone') {
            steps {
                git branch: 'master', url: 'https://github.com/malvihuzefa8/wordpress-project-docker-deploy.git'
            }
        }

        stage('Build & Deploy') {
            steps {
                withCredentials([
                    string(credentialsId: 'MYSQL_ROOT_PASSWORD', variable: 'MYSQL_ROOT_PASSWORD'),
                    string(credentialsId: 'MYSQL_DATABASE', variable: 'MYSQL_DATABASE')
                ]) {
                    sh 'docker compose build'
                    sh 'docker compose up -d --remove-orphans'
                }
            }
        }
    }
}
