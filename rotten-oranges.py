class Solution:
    def printGrid(self, grid:list[list[int]])->None:
        html = ''
        for i in range(len(grid)):
            for j in range(len(grid[0])):
                html += ", " + str(grid[i][j])
            html += "\n"

        return html

    def orangesRotting(self, grid:list[list[int]])->int:
        minute = 0
        row_dir = [1,-1,0,0]
        col_dir = [0,0,1,-1]
        total = 0
        rotten = 0
        queue = []
        row, col = len(grid), len(grid[0])

        for i in range(len(grid)):
            for j in range(len(grid[0])):
                if grid[i][j] == 2:
                    queue.append([i, j])
                if grid[i][j] == 1 or grid[i][j] == 2:
                    total += 1

        if total == 0:
            return 0

        while queue:
            rotten += len(queue)
            if rotten == total:
                return minute
            minute += 1

            this_minute = len(queue)
            for k in range(this_minute):
                curr = queue.pop(0)
                for pos in range(4):
                    new_r, new_c = curr[0] + row_dir[pos], curr[1] + col_dir[pos]
                    if 0 <= new_r < row and 0 <= new_c < col and grid[new_r][new_c] == 1:
                        grid[new_r][new_c] = 2
                        queue.append([new_r, new_c])
        return -1

grid = [[2,1,1],[1,1,0],[0,1,1]]
grid = [[2,1,1],[1,1,1],[0,1,2]]
sol = Solution()
ans = sol.orangesRotting(grid)
print(ans)