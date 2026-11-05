pipeline {
    agent any

    stages {

        stage('Clean Workspace') {
            steps {
                cleanWs()
                checkout scm   // ← ye zaroori hai, code wapas clone karega
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
